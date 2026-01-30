<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisionContent;
use Illuminate\Http\Request;

class VisionContentController extends Controller
{
    /**
     * Show the form for editing the vision content.
     */
    public function edit(Request $request)
    {
        $locale = $request->get('locale', 'vi');
        $content = VisionContent::where('locale', $locale)->first();

        // If no content exists, create default one
        if (!$content) {
            $content = VisionContent::create(['locale' => $locale]);
        }

        $locales = ['vi' => 'Tiếng Việt', 'en' => 'English'];

        return view('admin.vision_content.edit', compact('content', 'locale', 'locales'));
    }

    /**
     * Update the vision content in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'locale' => 'required|string|in:vi,en',
            'section_subtitle' => 'nullable|string|max:255',
            'section_title' => 'nullable|string',
            'section_description' => 'nullable|string',
            'section_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'timeline_1' => 'nullable|string',
            'timeline_2' => 'nullable|string',
            'timeline_3' => 'nullable|string',
            'timeline_4' => 'nullable|string',
        ]);

        $locale = $request->input('locale');
        $content = VisionContent::where('locale', $locale)->first();

        // Handle image upload
        if ($request->hasFile('section_image')) {
            if ($content && $content->section_image && !str_starts_with($content->section_image, '/') && \Storage::disk('public')->exists($content->section_image)) {
                \Storage::disk('public')->delete($content->section_image);
            }
            $imagePath = $request->file('section_image')->store('uploads/vision', 'public');
            $validatedData['section_image'] = $imagePath;
        }

        if (!$content) {
            $content = VisionContent::create($validatedData);
        } else {
            $content->update($validatedData);
        }

        return redirect()->route('admin.vision_content.edit', ['locale' => $locale])->with('success', 'Nội dung trang Tầm Nhìn đã được cập nhật thành công.');
    }
}
