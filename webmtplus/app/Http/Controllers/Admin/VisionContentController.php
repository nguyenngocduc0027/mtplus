<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisionContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisionContentController extends Controller
{
    /**
     * Display the admin form for Vision page content
     */
    public function index()
    {
        // Get or create the single vision content record
        $visionContent = VisionContent::firstOrCreate([]);

        return view('backend.pages.vision.index', compact('visionContent'));
    }

    /**
     * Update the vision content
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'title_vi' => 'nullable|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'timeline_1_vi' => 'nullable|string|max:255',
                'timeline_1_en' => 'nullable|string|max:255',
                'timeline_2_vi' => 'nullable|string|max:255',
                'timeline_2_en' => 'nullable|string|max:255',
                'timeline_3_vi' => 'nullable|string|max:255',
                'timeline_3_en' => 'nullable|string|max:255',
                'timeline_4_vi' => 'nullable|string|max:255',
                'timeline_4_en' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
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

        // Get or create the vision content record
        $visionContent = VisionContent::firstOrCreate([]);

        // Remove image field from validated data to avoid setting it to null
        unset($validated['image']);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($visionContent->image_path && file_exists(public_path($visionContent->image_path))) {
                unlink(public_path($visionContent->image_path));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/vision'), $filename);
            $validated['image_path'] = '/uploads/vision/' . $filename;
        }

        // Update vision content
        $visionContent->update($validated);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật nội dung Tầm nhìn thành công!',
                'data' => $visionContent
            ]);
        }

        return redirect()->route('admin.vision.index')->with('success', 'Cập nhật nội dung Tầm nhìn thành công!');
    }
}
