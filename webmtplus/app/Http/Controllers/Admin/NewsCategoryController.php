<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::orderBy('order')->paginate(20);
        return view('backend.pages.news.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.pages.news.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_vi' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news_categories,slug',
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'order' => 'nullable|integer|min:0',
        ]);

        // Handle icon upload
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/categories'), $filename);
            $validated['icon'] = '/uploads/news/categories/' . $filename;
        }

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name_en']);
        }

        // Handle checkbox
        $validated['is_active'] = $request->has('is_active');

        // Set default order
        if (!isset($validated['order'])) {
            $validated['order'] = 0;
        }

        NewsCategory::create($validated);

        return redirect()->route('admin.news.categories.index')
            ->with('success', __('admin.news_categories.create_success'));
    }

    public function edit(NewsCategory $category)
    {
        return view('backend.pages.news.categories.edit', compact('category'));
    }

    public function update(Request $request, NewsCategory $category)
    {
        $validated = $request->validate([
            'name_vi' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news_categories,slug,' . $category->id,
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'order' => 'nullable|integer|min:0',
        ]);

        // Handle icon upload
        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($category->icon && str_starts_with($category->icon, '/uploads/')) {
                $oldPath = public_path($category->icon);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('icon');
            $filename = time() . '_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/categories'), $filename);
            $validated['icon'] = '/uploads/news/categories/' . $filename;
        }

        // Update slug if name changed
        if ($request->name_en != $category->name_en && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name_en']);
        }

        // Handle checkbox
        $validated['is_active'] = $request->has('is_active');

        $category->update($validated);

        return redirect()->route('admin.news.categories.index')
            ->with('success', __('admin.news_categories.update_success'));
    }

    public function destroy(NewsCategory $category)
    {
        // Check if category has news
        if ($category->news()->count() > 0) {
            return redirect()->route('admin.news.categories.index')
                ->with('error', __('admin.news_categories.delete_error_has_news'));
        }

        // Delete icon
        if ($category->icon && str_starts_with($category->icon, '/uploads/')) {
            $path = public_path($category->icon);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $category->delete();

        return redirect()->route('admin.news.categories.index')
            ->with('success', __('admin.news_categories.delete_success'));
    }
}
