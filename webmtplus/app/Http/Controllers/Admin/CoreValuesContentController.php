<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoreValuesContent;
use Illuminate\Http\Request;

class CoreValuesContentController extends Controller
{
    /**
     * Show the form for editing the core values content.
     */
    public function edit(Request $request)
    {
        $locale = $request->get('locale', 'vi');
        $content = CoreValuesContent::where('locale', $locale)->first();

        // If no content exists, create default one
        if (!$content) {
            $content = CoreValuesContent::create(['locale' => $locale]);
        }

        $locales = ['vi' => 'Tiếng Việt', 'en' => 'English'];

        return view('admin.core_values_content.edit', compact('content', 'locale', 'locales'));
    }

    /**
     * Update the core values content in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'locale' => 'required|string|in:vi,en',
            'section_subtitle' => 'nullable|string|max:255',
            'section_title' => 'nullable|string',
            'value_1_title' => 'nullable|string|max:255',
            'value_1_description' => 'nullable|string',
            'value_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'value_2_title' => 'nullable|string|max:255',
            'value_2_description' => 'nullable|string',
            'value_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'value_3_title' => 'nullable|string|max:255',
            'value_3_description' => 'nullable|string',
            'value_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'value_4_title' => 'nullable|string|max:255',
            'value_4_description' => 'nullable|string',
            'value_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $locale = $request->input('locale');
        $content = CoreValuesContent::where('locale', $locale)->first();

        // Handle icon uploads
        for ($i = 1; $i <= 4; $i++) {
            $iconField = "value_{$i}_icon";
            if ($request->hasFile($iconField)) {
                if ($content && $content->{$iconField} && !str_starts_with($content->{$iconField}, '/') && \Storage::disk('public')->exists($content->{$iconField})) {
                    \Storage::disk('public')->delete($content->{$iconField});
                }
                $iconPath = $request->file($iconField)->store('uploads/core-values', 'public');
                $validatedData[$iconField] = $iconPath;
            }
        }

        if (!$content) {
            $content = CoreValuesContent::create($validatedData);
        } else {
            $content->update($validatedData);
        }

        return redirect()->route('admin.core_values_content.edit', ['locale' => $locale])->with('success', 'Nội dung Giá Trị Cốt Lõi đã được cập nhật thành công.');
    }
}
