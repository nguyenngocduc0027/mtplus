<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsTag;
use Illuminate\Http\Request;

class NewsTagController extends Controller
{
    public function index()
    {
        $tags = NewsTag::withCount('news')->orderBy('name_vi')->paginate(20);
        return view('backend.pages.news.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('backend.pages.news.tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_vi' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news_tags,slug',
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name_en']);
        }

        NewsTag::create($validated);

        return redirect()->route('admin.news.tags.index')
            ->with('success', __('admin.news_tags.create_success'));
    }

    public function edit(NewsTag $tag)
    {
        return view('backend.pages.news.tags.edit', compact('tag'));
    }

    public function update(Request $request, NewsTag $tag)
    {
        $validated = $request->validate([
            'name_vi' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:news_tags,slug,' . $tag->id,
        ]);

        // Update slug if name changed
        if ($request->name_en != $tag->name_en && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name_en']);
        }

        $tag->update($validated);

        return redirect()->route('admin.news.tags.index')
            ->with('success', __('admin.news_tags.update_success'));
    }

    public function destroy(NewsTag $tag)
    {
        // Check if tag has news
        if ($tag->news()->count() > 0) {
            return redirect()->route('admin.news.tags.index')
                ->with('error', __('admin.news_tags.delete_error_has_news'));
        }

        $tag->delete();

        return redirect()->route('admin.news.tags.index')
            ->with('success', __('admin.news_tags.delete_success'));
    }
}
