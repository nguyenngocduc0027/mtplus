<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AreasOperationSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AreasOperationController extends Controller
{
    /**
     * Display the admin form with tabs for each section
     */
    public function index()
    {
        // Get or create all 3 sections
        $section1 = AreasOperationSection::firstOrCreate(['section_number' => 1]);
        $section2 = AreasOperationSection::firstOrCreate(['section_number' => 2]);
        $section3 = AreasOperationSection::firstOrCreate(['section_number' => 3]);

        return view('backend.pages.areas-operation.index', compact('section1', 'section2', 'section3'));
    }

    /**
     * Update a specific section
     */
    public function update(Request $request, $section)
    {
        try {
            $validated = $request->validate([
                'image_layout' => 'required|in:left,right',
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'title_vi' => 'nullable|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'card_1_text_vi' => 'nullable|string|max:255',
                'card_1_text_en' => 'nullable|string|max:255',
                'card_2_text_vi' => 'nullable|string|max:255',
                'card_2_text_en' => 'nullable|string|max:255',
                'card_3_text_vi' => 'nullable|string|max:255',
                'card_3_text_en' => 'nullable|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $sectionModel = AreasOperationSection::where('section_number', $section)->firstOrFail();

        // Remove image fields from validated data to avoid setting them to null
        unset($validated['main_image']);
        unset($validated['thumbnail_image']);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            // Delete old image if exists
            if ($sectionModel->main_image_path && Storage::disk('public')->exists(str_replace('/storage/', '', $sectionModel->main_image_path))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $sectionModel->main_image_path));
            }

            $path = $request->file('main_image')->store('areas-operation', 'public');
            $validated['main_image_path'] = '/storage/' . $path;
        }

        // Handle thumbnail image upload
        if ($request->hasFile('thumbnail_image')) {
            // Delete old image if exists
            if ($sectionModel->thumbnail_image_path && Storage::disk('public')->exists(str_replace('/storage/', '', $sectionModel->thumbnail_image_path))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $sectionModel->thumbnail_image_path));
            }

            $path = $request->file('thumbnail_image')->store('areas-operation', 'public');
            $validated['thumbnail_image_path'] = '/storage/' . $path;
        }

        // Update section
        $sectionModel->update($validated);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Section ' . $section . ' thành công!',
                'data' => $sectionModel
            ]);
        }

        return redirect()->route('admin.areas-operation.index')->with('success', 'Cập nhật Section ' . $section . ' thành công!');
    }
}
