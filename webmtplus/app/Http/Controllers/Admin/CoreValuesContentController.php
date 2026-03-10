<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoreValuesContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoreValuesContentController extends Controller
{
    /**
     * Display the admin form for Core Values page content
     */
    public function index()
    {
        // Get or create the single core values content record
        $coreValuesContent = CoreValuesContent::firstOrCreate([]);

        return view('backend.pages.core-values.index', compact('coreValuesContent'));
    }

    /**
     * Update the core values content
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'section_subtitle_vi' => 'nullable|string|max:255',
                'section_subtitle_en' => 'nullable|string|max:255',
                'section_title_vi' => 'nullable|string|max:255',
                'section_title_en' => 'nullable|string|max:255',
                'value_1_title_vi' => 'nullable|string|max:255',
                'value_1_title_en' => 'nullable|string|max:255',
                'value_1_description_vi' => 'nullable|string',
                'value_1_description_en' => 'nullable|string',
                'value_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'value_2_title_vi' => 'nullable|string|max:255',
                'value_2_title_en' => 'nullable|string|max:255',
                'value_2_description_vi' => 'nullable|string',
                'value_2_description_en' => 'nullable|string',
                'value_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'value_3_title_vi' => 'nullable|string|max:255',
                'value_3_title_en' => 'nullable|string|max:255',
                'value_3_description_vi' => 'nullable|string',
                'value_3_description_en' => 'nullable|string',
                'value_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'value_4_title_vi' => 'nullable|string|max:255',
                'value_4_title_en' => 'nullable|string|max:255',
                'value_4_description_vi' => 'nullable|string',
                'value_4_description_en' => 'nullable|string',
                'value_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
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

        // Get or create the core values content record
        $coreValuesContent = CoreValuesContent::firstOrCreate([]);

        // Remove image fields from validated data to avoid setting them to null
        unset($validated['value_1_icon']);
        unset($validated['value_2_icon']);
        unset($validated['value_3_icon']);
        unset($validated['value_4_icon']);

        // Handle icon uploads for each value
        for ($i = 1; $i <= 4; $i++) {
            $iconField = 'value_' . $i . '_icon';

            if ($request->hasFile($iconField)) {
                // Delete old icon if exists
                $oldIconField = 'value_' . $i . '_icon';
                if ($coreValuesContent->$oldIconField && file_exists(public_path($coreValuesContent->$oldIconField))) {
                    unlink(public_path($coreValuesContent->$oldIconField));
                }

                $file = $request->file($iconField);
                $filename = time() . '_value_' . $i . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/core-values/icons'), $filename);
                $validated[$iconField] = '/uploads/core-values/icons/' . $filename;
            }
        }

        // Update core values content
        $coreValuesContent->update($validated);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật nội dung Giá trị cốt lõi thành công!',
                'data' => $coreValuesContent
            ]);
        }

        return redirect()->route('admin.core-values.index')->with('success', 'Cập nhật nội dung Giá trị cốt lõi thành công!');
    }
}
