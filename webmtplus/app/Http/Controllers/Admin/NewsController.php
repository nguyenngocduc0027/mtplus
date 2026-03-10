<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::with(['category', 'tags']);

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search - Sanitize input to prevent SQL injection
        if ($request->filled('search')) {
            $search = $request->input('search');
            // Remove special SQL characters
            $search = str_replace(['%', '_'], ['\\%', '\\_'], $search);
            $query->where(function($q) use ($search) {
                $q->where('title_vi', 'like', "%{$search}%")
                  ->orWhere('title_en', 'like', "%{$search}%");
            });
        }

        $news = $query->latest()->paginate(20)->withQueryString();
        $categories = NewsCategory::active()->ordered()->get();

        return view('backend.pages.news.index', compact('news', 'categories'));
    }

    public function create()
    {
        $categories = NewsCategory::active()->ordered()->get();
        $tags = NewsTag::all();
        return view('backend.pages.news.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news,slug',
            'category_id' => 'required|exists:news_categories,id',
            'excerpt_vi' => 'nullable|string',
            'excerpt_en' => 'nullable|string',
            'content_vi' => 'nullable|string',
            'content_en' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'author_name' => 'nullable|string|max:255',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:news_tags,id',
            'meta_title_vi' => 'nullable|string|max:255',
            'meta_title_en' => 'nullable|string|max:255',
            'meta_description_vi' => 'nullable|string',
            'meta_description_en' => 'nullable|string',
            'meta_keywords_vi' => 'nullable|string',
            'meta_keywords_en' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published,scheduled,archived',
            'order' => 'nullable|integer',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $this->handleImageUpload($request->file('featured_image'));
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_trending'] = $request->has('is_trending');
        $validated['is_active'] = $request->has('is_active');
        $validated['allow_comments'] = $request->has('allow_comments');

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_en']);
        }

        // Set author
        if (empty($validated['author_name'])) {
            $validated['author_name'] = 'Admin';
        }

        // Set published_at if status is published and not set
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $news = News::create($validated);

        // Attach tags
        if ($request->filled('tags')) {
            $news->tags()->attach($request->tags);
        }

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.news.create_success')
            ]);
        }

        return redirect()->route('admin.news.index')
            ->with('success', __('admin.news.create_success'));
    }

    public function show(News $news)
    {
        $news->load(['category', 'tags', 'comments']);
        return view('backend.pages.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $categories = NewsCategory::active()->ordered()->get();
        $tags = NewsTag::all();
        $news->load(['tags']);
        return view('backend.pages.news.edit', compact('news', 'categories', 'tags'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news,slug,' . $news->id,
            'category_id' => 'required|exists:news_categories,id',
            'excerpt_vi' => 'nullable|string',
            'excerpt_en' => 'nullable|string',
            'content_vi' => 'nullable|string',
            'content_en' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'author_name' => 'nullable|string|max:255',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:news_tags,id',
            'meta_title_vi' => 'nullable|string|max:255',
            'meta_title_en' => 'nullable|string|max:255',
            'meta_description_vi' => 'nullable|string',
            'meta_description_en' => 'nullable|string',
            'meta_keywords_vi' => 'nullable|string',
            'meta_keywords_en' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published,scheduled,archived',
            'order' => 'nullable|integer',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $this->handleImageUpload(
                $request->file('featured_image'),
                $news->featured_image
            );
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_trending'] = $request->has('is_trending');
        $validated['is_active'] = $request->has('is_active');
        $validated['allow_comments'] = $request->has('allow_comments');

        // Update slug if title changed and slug is empty
        if ($validated['title_en'] != $news->title_en && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_en']);
        }

        // Set published_at if status is published and not set
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $news->update($validated);

        // Sync tags
        if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        } else {
            $news->tags()->detach();
        }

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.news.update_success')
            ]);
        }

        return redirect()->route('admin.news.index')
            ->with('success', __('admin.news.update_success'));
    }

    public function destroy(News $news)
    {
        // Delete featured image
        $this->deleteImageIfExists($news->featured_image);

        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', __('admin.news.delete_success'));
    }

    /**
     * Helper method to handle image upload
     */
    private function handleImageUpload($file, $existingPath = null)
    {
        // Delete old image if exists
        if ($existingPath) {
            $this->deleteImageIfExists($existingPath);
        }

        // Upload new image
        $filename = time() . '_featured_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/news'), $filename);
        return '/uploads/news/' . $filename;
    }

    /**
     * Helper method to delete image if it exists
     */
    private function deleteImageIfExists($imagePath)
    {
        if ($imagePath && str_starts_with($imagePath, '/uploads/')) {
            $path = public_path($imagePath);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }
}
