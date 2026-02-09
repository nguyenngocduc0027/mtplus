<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MissionContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MissionContentController extends Controller
{
    /**
     * Display the admin form for Mission page content
     */
    public function index()
    {
        // Get or create the single mission content record
        $missionContent = MissionContent::firstOrCreate([]);

        return view('backend.pages.mission.index', compact('missionContent'));
    }

    /**
     * Update the mission content
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'title_vi' => 'nullable|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'feature_1_vi' => 'nullable|string|max:255',
                'feature_1_en' => 'nullable|string|max:255',
                'feature_2_vi' => 'nullable|string|max:255',
                'feature_2_en' => 'nullable|string|max:255',
                'feature_3_vi' => 'nullable|string|max:255',
                'feature_3_en' => 'nullable|string|max:255',
                'feature_4_vi' => 'nullable|string|max:255',
                'feature_4_en' => 'nullable|string|max:255',
                'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Du lieu khong hop le',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        }

        // Get or create the mission content record
        $missionContent = MissionContent::firstOrCreate([]);

        // Remove image field from validated data to avoid setting it to null
        unset($validated['background_image']);

        // Handle background image upload
        if ($request->hasFile('background_image')) {
            // Delete old image if exists
            if ($missionContent->background_image_path && file_exists(public_path($missionContent->background_image_path))) {
                unlink(public_path($missionContent->background_image_path));
            }

            $file = $request->file('background_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/mission'), $filename);
            $validated['background_image_path'] = '/uploads/mission/' . $filename;
        }

        // Update mission content
        $missionContent->update($validated);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cap nhat noi dung Mission thanh cong!',
                'data' => $missionContent
            ]);
        }

        return redirect()->route('admin.mission.index')->with('success', 'Cap nhat noi dung Mission thanh cong!');
    }
}
