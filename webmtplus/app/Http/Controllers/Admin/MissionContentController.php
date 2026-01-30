<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MissionContent;
use Illuminate\Http\Request;

class MissionContentController extends Controller
{
    /**
     * Show the form for editing the mission content.
     */
    public function edit(Request $request)
    {
        $locale = $request->get('locale', 'vi');
        $content = MissionContent::where('locale', $locale)->first();

        // If no content exists, create default one
        if (!$content) {
            $content = MissionContent::create(['locale' => $locale]);
        }

        $locales = ['vi' => 'Tiếng Việt', 'en' => 'English'];

        return view('admin.mission_content.edit', compact('content', 'locale', 'locales'));
    }

    /**
     * Update the mission content in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'locale' => 'required|string|in:vi,en',
            'section_2_title' => 'nullable|string',
            'section_2_subtitle' => 'nullable|string|max:255',
            'section_2_description' => 'nullable|string',
            'section_2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'feature_1' => 'nullable|string|max:255',
            'feature_2' => 'nullable|string|max:255',
            'feature_3' => 'nullable|string|max:255',
            'feature_4' => 'nullable|string|max:255',
        ]);

        $locale = $request->input('locale');
        $content = MissionContent::where('locale', $locale)->first();

        // Handle image upload for section 2
        if ($request->hasFile('section_2_image')) {
            if ($content && $content->section_2_image && !str_starts_with($content->section_2_image, '/') && \Storage::disk('public')->exists($content->section_2_image)) {
                \Storage::disk('public')->delete($content->section_2_image);
            }
            $imagePath = $request->file('section_2_image')->store('uploads/mission', 'public');
            $validatedData['section_2_image'] = $imagePath;
        }

        if (!$content) {
            $content = MissionContent::create($validatedData);
        } else {
            $content->update($validatedData);
        }

        return redirect()->route('admin.mission_content.edit', ['locale' => $locale])->with('success', 'Nội dung trang Sứ Mệnh đã được cập nhật thành công.');
    }
}
