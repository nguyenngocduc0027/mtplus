<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    /**
     * Show the form for editing the about content.
     */
    public function edit(Request $request)
    {
        $locale = $request->get('locale', 'vi');
        $content = AboutContent::where('locale', $locale)->first();

        // If no content exists, create default one
        if (!$content) {
            $content = AboutContent::create(['locale' => $locale]);
        }

        $locales = ['vi' => 'Tiếng Việt', 'en' => 'English'];

        return view('admin.about_content.edit', compact('content', 'locale', 'locales'));
    }

    /**
     * Update the about content in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'locale' => 'required|string|in:vi,en',
            'subtitle' => 'nullable|string|max:255',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image_main' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_small' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'counter_1_title' => 'nullable|string|max:255',
            'counter_1_number' => 'nullable|string|max:255',
            'counter_1_description' => 'nullable|string|max:255',
            'counter_2_title' => 'nullable|string|max:255',
            'counter_2_number' => 'nullable|string|max:255',
            'counter_2_description' => 'nullable|string|max:255',
            'counter_3_title' => 'nullable|string|max:255',
            'counter_3_number' => 'nullable|string|max:255',
            'counter_3_description' => 'nullable|string|max:255',
        ]);

        $locale = $request->input('locale');
        $content = AboutContent::where('locale', $locale)->first();

        // Handle image uploads
        if ($request->hasFile('image_main')) {
            if ($content && $content->image_main && !str_starts_with($content->image_main, '/') && \Storage::disk('public')->exists($content->image_main)) {
                \Storage::disk('public')->delete($content->image_main);
            }
            $imagePath = $request->file('image_main')->store('uploads/about', 'public');
            $validatedData['image_main'] = $imagePath;
        }

        if ($request->hasFile('image_small')) {
            if ($content && $content->image_small && !str_starts_with($content->image_small, '/') && \Storage::disk('public')->exists($content->image_small)) {
                \Storage::disk('public')->delete($content->image_small);
            }
            $imagePath = $request->file('image_small')->store('uploads/about', 'public');
            $validatedData['image_small'] = $imagePath;
        }

        if (!$content) {
            $content = AboutContent::create($validatedData);
        } else {
            $content->update($validatedData);
        }

        return redirect()->route('admin.about_content.edit', ['locale' => $locale])->with('success', 'Nội dung phần Giới Thiệu đã được cập nhật thành công.');
    }
}
