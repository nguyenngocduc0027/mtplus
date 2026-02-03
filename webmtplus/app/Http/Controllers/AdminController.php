<?php

namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }

    public function contentSetupHome()
    {
        $heroSection = HomeHeroSection::firstOrCreate([]);
        return view('backend.pages.home.index', compact('heroSection'));
    }

    public function updateHomeHero(Request $request)
    {
        // Debug logging
        \Log::info('=== UPDATE HERO SECTION ===');
        \Log::info('Request data:', $request->all());

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'thumb_para_vi' => 'nullable|string',
                'thumb_para_en' => 'nullable|string',
                'video_url' => 'nullable|url',
                'learn_more_url' => 'nullable|string|max:255',
                'read_more_url' => 'nullable|string|max:255',
                'hero_slide_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'hero_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $heroSection = HomeHeroSection::firstOrCreate([]);

        // Remove image fields from validated data to avoid setting them to null
        unset($validated['hero_slide_image']);
        unset($validated['hero_main_image']);

        // Handle image uploads
        if ($request->hasFile('hero_slide_image')) {
            $path = $request->file('hero_slide_image')->store('hero', 'public');
            $validated['hero_slide_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('hero_main_image')) {
            $path = $request->file('hero_main_image')->store('hero', 'public');
            $validated['hero_main_image'] = '/storage/' . $path;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update hero section
        $updated = $heroSection->update($validated);

        \Log::info('Hero section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'hero_id' => $heroSection->id
        ]);

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Hero Section thành công!',
                'data' => $heroSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Hero Section thành công!');
    }
}
