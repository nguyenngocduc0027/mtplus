<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CapabilitiesContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CapabilitiesContentController extends Controller
{
    /**
     * Display the admin form for Capabilities and Experience page content
     */
    public function index()
    {
        // Get or create the single capabilities content record
        $capabilitiesContent = CapabilitiesContent::firstOrCreate([]);

        return view('backend.pages.capabilities.index', compact('capabilitiesContent'));
    }

    /**
     * Update the capabilities content
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                // Section 1
                'section_1_title_vi' => 'nullable|string|max:255',
                'section_1_title_en' => 'nullable|string|max:255',

                // Feature 1
                'feature_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'feature_1_title_vi' => 'nullable|string|max:255',
                'feature_1_title_en' => 'nullable|string|max:255',
                'feature_1_description_vi' => 'nullable|string',
                'feature_1_description_en' => 'nullable|string',

                // Feature 2
                'feature_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'feature_2_title_vi' => 'nullable|string|max:255',
                'feature_2_title_en' => 'nullable|string|max:255',
                'feature_2_description_vi' => 'nullable|string',
                'feature_2_description_en' => 'nullable|string',

                // Feature 3
                'feature_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'feature_3_title_vi' => 'nullable|string|max:255',
                'feature_3_title_en' => 'nullable|string|max:255',
                'feature_3_description_vi' => 'nullable|string',
                'feature_3_description_en' => 'nullable|string',

                // Feature 4
                'feature_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'feature_4_title_vi' => 'nullable|string|max:255',
                'feature_4_title_en' => 'nullable|string|max:255',
                'feature_4_description_vi' => 'nullable|string',
                'feature_4_description_en' => 'nullable|string',

                // Section 3
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'section_3_title_vi' => 'nullable|string|max:255',
                'section_3_title_en' => 'nullable|string|max:255',
                'section_3_description_vi' => 'nullable|string',
                'section_3_description_en' => 'nullable|string',

                // Progress bars
                'progress_1_title_vi' => 'nullable|string|max:255',
                'progress_1_title_en' => 'nullable|string|max:255',
                'progress_1_percentage' => 'nullable|integer|min:0|max:100',
                'progress_2_title_vi' => 'nullable|string|max:255',
                'progress_2_title_en' => 'nullable|string|max:255',
                'progress_2_percentage' => 'nullable|integer|min:0|max:100',
                'progress_3_title_vi' => 'nullable|string|max:255',
                'progress_3_title_en' => 'nullable|string|max:255',
                'progress_3_percentage' => 'nullable|integer|min:0|max:100',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Dữ liệu không hợp lệ',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        }

        // Get or create the capabilities content record
        $capabilitiesContent = CapabilitiesContent::firstOrCreate([]);

        // Remove image fields from validated data to avoid setting them to null
        $imageFields = ['feature_1_icon', 'feature_2_icon', 'feature_3_icon', 'feature_4_icon', 'main_image', 'thumbnail_image'];
        foreach ($imageFields as $field) {
            unset($validated[$field]);
        }

        // Handle feature icon uploads
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = 'feature_' . $i . '_icon';
            $pathField = 'feature_' . $i . '_icon_path';

            if ($request->hasFile($fieldName)) {
                // Delete old icon if exists
                if ($capabilitiesContent->$pathField && file_exists(public_path($capabilitiesContent->$pathField))) {
                    unlink(public_path($capabilitiesContent->$pathField));
                }

                $file = $request->file($fieldName);
                $filename = time() . '_feature_' . $i . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/capabilities/features'), $filename);
                $validated[$pathField] = '/uploads/capabilities/features/' . $filename;
            }
        }

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            // Delete old image if exists
            if ($capabilitiesContent->main_image_path && file_exists(public_path($capabilitiesContent->main_image_path))) {
                unlink(public_path($capabilitiesContent->main_image_path));
            }

            $file = $request->file('main_image');
            $filename = time() . '_main_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/capabilities/images'), $filename);
            $validated['main_image_path'] = '/uploads/capabilities/images/' . $filename;
        }

        // Handle thumbnail image upload
        if ($request->hasFile('thumbnail_image')) {
            // Delete old image if exists
            if ($capabilitiesContent->thumbnail_image_path && file_exists(public_path($capabilitiesContent->thumbnail_image_path))) {
                unlink(public_path($capabilitiesContent->thumbnail_image_path));
            }

            $file = $request->file('thumbnail_image');
            $filename = time() . '_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/capabilities/images'), $filename);
            $validated['thumbnail_image_path'] = '/uploads/capabilities/images/' . $filename;
        }

        // Update capabilities content
        $capabilitiesContent->update($validated);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật nội dung Năng lực & Kinh nghiệm thành công!',
                'data' => $capabilitiesContent
            ]);
        }

        return redirect()->route('admin.capabilities.index')->with('success', 'Cập nhật nội dung Năng lực & Kinh nghiệm thành công!');
    }
}
