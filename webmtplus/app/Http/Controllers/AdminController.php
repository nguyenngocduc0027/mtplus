<?php

namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use App\Models\HomeAboutSection;
use App\Models\HomeServicesSection;
use App\Models\HomeWhyChooseSection;
use App\Models\HomeCommitmentSection;
use App\Models\HomeProjectSection;
use App\Models\HomeTeamSection;
use App\Models\HomeAwardsSection;
use App\Models\HomeTestimonialsSection;
use App\Models\HomeNewsSection;
use App\Models\HomeContactSection;
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
        $aboutSection = HomeAboutSection::firstOrCreate([]);
        $servicesSection = HomeServicesSection::firstOrCreate([]);
        $whyChooseSection = HomeWhyChooseSection::firstOrCreate([]);
        $commitmentSection = HomeCommitmentSection::firstOrCreate([]);
        $projectSection = HomeProjectSection::firstOrCreate([]);
        $teamSection = HomeTeamSection::firstOrCreate([]);
        $awardsSection = HomeAwardsSection::firstOrCreate([]);
        $testimonialsSection = HomeTestimonialsSection::firstOrCreate([]);
        $newsSection = HomeNewsSection::firstOrCreate([]);
        $contactSection = HomeContactSection::firstOrCreate([]);
        return view('backend.pages.home.index', compact('heroSection', 'aboutSection', 'servicesSection', 'whyChooseSection', 'commitmentSection', 'projectSection', 'teamSection', 'awardsSection', 'testimonialsSection', 'newsSection', 'contactSection'));
    }

    public function updateHomeHero(Request $request)
    {
      

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
                'hero_slide_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'hero_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
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
            $file = $request->file('hero_slide_image');
            $filename = time() . '_hero_slide_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/hero'), $filename);
            $validated['hero_slide_image'] = '/uploads/hero/' . $filename;
        }

        if ($request->hasFile('hero_main_image')) {
            $file = $request->file('hero_main_image');
            $filename = time() . '_hero_main_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/hero'), $filename);
            $validated['hero_main_image'] = '/uploads/hero/' . $filename;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update hero section
        $updated = $heroSection->update($validated);

       

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

    public function updateHomeAbout(Request $request)
    {
      

        try {
            $validated = $request->validate([
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'button_url' => 'nullable|string|max:255',
                'counter_1_title_vi' => 'nullable|string|max:255',
                'counter_1_title_en' => 'nullable|string|max:255',
                'counter_1_number' => 'nullable|string|max:50',
                'counter_1_suffix' => 'nullable|string|max:50',
                'counter_1_desc_vi' => 'nullable|string|max:255',
                'counter_1_desc_en' => 'nullable|string|max:255',
                'counter_2_title_vi' => 'nullable|string|max:255',
                'counter_2_title_en' => 'nullable|string|max:255',
                'counter_2_number' => 'nullable|string|max:50',
                'counter_2_suffix' => 'nullable|string|max:50',
                'counter_2_desc_vi' => 'nullable|string|max:255',
                'counter_2_desc_en' => 'nullable|string|max:255',
                'counter_3_title_vi' => 'nullable|string|max:255',
                'counter_3_title_en' => 'nullable|string|max:255',
                'counter_3_number' => 'nullable|string|max:50',
                'counter_3_suffix' => 'nullable|string|max:50',
                'counter_3_desc_vi' => 'nullable|string|max:255',
                'counter_3_desc_en' => 'nullable|string|max:255',
                'about_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'about_thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
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

        $aboutSection = HomeAboutSection::firstOrCreate([]);

        // Remove image fields from validated data
        unset($validated['about_main_image']);
        unset($validated['about_thumb_image']);

        // Handle image uploads
        if ($request->hasFile('about_main_image')) {
            $file = $request->file('about_main_image');
            $filename = time() . '_about_main_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $filename);
            $validated['about_main_image'] = '/uploads/about/' . $filename;
        }

        if ($request->hasFile('about_thumb_image')) {
            $file = $request->file('about_thumb_image');
            $filename = time() . '_about_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $filename);
            $validated['about_thumb_image'] = '/uploads/about/' . $filename;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update about section
        $updated = $aboutSection->update($validated);

    

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật About Section thành công!',
                'data' => $aboutSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật About Section thành công!');
    }

    public function updateHomeServices(Request $request)
    {
       

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'service_1_title_vi' => 'nullable|string|max:255',
                'service_1_title_en' => 'nullable|string|max:255',
                'service_1_desc_vi' => 'nullable|string',
                'service_1_desc_en' => 'nullable|string',
                'service_1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'service_1_url' => 'nullable|string|max:255',
                'service_2_title_vi' => 'nullable|string|max:255',
                'service_2_title_en' => 'nullable|string|max:255',
                'service_2_desc_vi' => 'nullable|string',
                'service_2_desc_en' => 'nullable|string',
                'service_2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'service_2_url' => 'nullable|string|max:255',
                'service_3_title_vi' => 'nullable|string|max:255',
                'service_3_title_en' => 'nullable|string|max:255',
                'service_3_desc_vi' => 'nullable|string',
                'service_3_desc_en' => 'nullable|string',
                'service_3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'service_3_url' => 'nullable|string|max:255',
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

        $servicesSection = HomeServicesSection::firstOrCreate([]);

        // Remove image fields from validated data
        unset($validated['service_1_image']);
        unset($validated['service_2_image']);
        unset($validated['service_3_image']);

        // Handle image uploads
        if ($request->hasFile('service_1_image')) {
            $file = $request->file('service_1_image');
            $filename = time() . '_service_1_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
            $validated['service_1_image'] = '/uploads/services/' . $filename;
        }

        if ($request->hasFile('service_2_image')) {
            $file = $request->file('service_2_image');
            $filename = time() . '_service_2_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
            $validated['service_2_image'] = '/uploads/services/' . $filename;
        }

        if ($request->hasFile('service_3_image')) {
            $file = $request->file('service_3_image');
            $filename = time() . '_service_3_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
            $validated['service_3_image'] = '/uploads/services/' . $filename;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update services section
        $updated = $servicesSection->update($validated);

      

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Services Section thành công!',
                'data' => $servicesSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Services Section thành công!');
    }

    public function updateHomeWhyChoose(Request $request)
    {
      

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'feature_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_1_title_vi' => 'nullable|string|max:255',
                'feature_1_title_en' => 'nullable|string|max:255',
                'feature_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_2_title_vi' => 'nullable|string|max:255',
                'feature_2_title_en' => 'nullable|string|max:255',
                'feature_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_3_title_vi' => 'nullable|string|max:255',
                'feature_3_title_en' => 'nullable|string|max:255',
                'feature_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_4_title_vi' => 'nullable|string|max:255',
                'feature_4_title_en' => 'nullable|string|max:255',
                'button_url' => 'nullable|string|max:255',
                'ceo_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'ceo_quote_vi' => 'nullable|string',
                'ceo_quote_en' => 'nullable|string',
                'ceo_name' => 'nullable|string|max:255',
                'ceo_position_vi' => 'nullable|string|max:255',
                'ceo_position_en' => 'nullable|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
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

        $whyChooseSection = HomeWhyChooseSection::firstOrCreate([]);

        // Remove image fields from validated data
        unset($validated['feature_1_icon']);
        unset($validated['feature_2_icon']);
        unset($validated['feature_3_icon']);
        unset($validated['feature_4_icon']);
        unset($validated['ceo_avatar']);
        unset($validated['main_image']);
        unset($validated['thumb_image']);

        // Handle image uploads
        if ($request->hasFile('feature_1_icon')) {
            $file = $request->file('feature_1_icon');
            $filename = time() . '_feature_1_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose/icons'), $filename);
            $validated['feature_1_icon'] = '/uploads/why-choose/icons/' . $filename;
        }

        if ($request->hasFile('feature_2_icon')) {
            $file = $request->file('feature_2_icon');
            $filename = time() . '_feature_2_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose/icons'), $filename);
            $validated['feature_2_icon'] = '/uploads/why-choose/icons/' . $filename;
        }

        if ($request->hasFile('feature_3_icon')) {
            $file = $request->file('feature_3_icon');
            $filename = time() . '_feature_3_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose/icons'), $filename);
            $validated['feature_3_icon'] = '/uploads/why-choose/icons/' . $filename;
        }

        if ($request->hasFile('feature_4_icon')) {
            $file = $request->file('feature_4_icon');
            $filename = time() . '_feature_4_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose/icons'), $filename);
            $validated['feature_4_icon'] = '/uploads/why-choose/icons/' . $filename;
        }

        if ($request->hasFile('ceo_avatar')) {
            $file = $request->file('ceo_avatar');
            $filename = time() . '_ceo_avatar_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose'), $filename);
            $validated['ceo_avatar'] = '/uploads/why-choose/' . $filename;
        }

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = time() . '_main_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose'), $filename);
            $validated['main_image'] = '/uploads/why-choose/' . $filename;
        }

        if ($request->hasFile('thumb_image')) {
            $file = $request->file('thumb_image');
            $filename = time() . '_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/why-choose'), $filename);
            $validated['thumb_image'] = '/uploads/why-choose/' . $filename;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update why choose section
        $updated = $whyChooseSection->update($validated);

      

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Why Choose Us Section thành công!',
                'data' => $whyChooseSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Why Choose Us Section thành công!');
    }

    public function updateHomeCommitment(Request $request)
    {
 

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'feature_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_1_title_vi' => 'nullable|string|max:255',
                'feature_1_title_en' => 'nullable|string|max:255',
                'feature_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_2_title_vi' => 'nullable|string|max:255',
                'feature_2_title_en' => 'nullable|string|max:255',
                'feature_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_3_title_vi' => 'nullable|string|max:255',
                'feature_3_title_en' => 'nullable|string|max:255',
                'feature_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'feature_4_title_vi' => 'nullable|string|max:255',
                'feature_4_title_en' => 'nullable|string|max:255',
                'button_url' => 'nullable|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'rating_score' => 'nullable|string|max:10',
                'customer_count' => 'nullable|string|max:50',
                'customer_text_vi' => 'nullable|string|max:255',
                'customer_text_en' => 'nullable|string|max:255',
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

        $commitmentSection = HomeCommitmentSection::firstOrCreate([]);

        // Remove image fields from validated data
        unset($validated['feature_1_icon']);
        unset($validated['feature_2_icon']);
        unset($validated['feature_3_icon']);
        unset($validated['feature_4_icon']);
        unset($validated['main_image']);
        unset($validated['thumb_image']);

        // Handle image uploads
        if ($request->hasFile('feature_1_icon')) {
            $file = $request->file('feature_1_icon');
            $filename = time() . '_feature_1_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment/icons'), $filename);
            $validated['feature_1_icon'] = '/uploads/commitment/icons/' . $filename;
        }

        if ($request->hasFile('feature_2_icon')) {
            $file = $request->file('feature_2_icon');
            $filename = time() . '_feature_2_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment/icons'), $filename);
            $validated['feature_2_icon'] = '/uploads/commitment/icons/' . $filename;
        }

        if ($request->hasFile('feature_3_icon')) {
            $file = $request->file('feature_3_icon');
            $filename = time() . '_feature_3_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment/icons'), $filename);
            $validated['feature_3_icon'] = '/uploads/commitment/icons/' . $filename;
        }

        if ($request->hasFile('feature_4_icon')) {
            $file = $request->file('feature_4_icon');
            $filename = time() . '_feature_4_icon_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment/icons'), $filename);
            $validated['feature_4_icon'] = '/uploads/commitment/icons/' . $filename;
        }

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = time() . '_main_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment'), $filename);
            $validated['main_image'] = '/uploads/commitment/' . $filename;
        }

        if ($request->hasFile('thumb_image')) {
            $file = $request->file('thumb_image');
            $filename = time() . '_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/commitment'), $filename);
            $validated['thumb_image'] = '/uploads/commitment/' . $filename;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update commitment section
        $updated = $commitmentSection->update($validated);

   

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Commitment Section thành công!',
                'data' => $commitmentSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Commitment Section thành công!');
    }

    public function updateHomeProject(Request $request)
    {

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
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

        $projectSection = HomeProjectSection::firstOrCreate([]);

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update project section
        $updated = $projectSection->update($validated);

 

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Project Section thành công!',
                'data' => $projectSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Project Section thành công!');
    }

    public function updateHomeTeam(Request $request)
    {
      
        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
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

        $teamSection = HomeTeamSection::firstOrCreate([]);

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update team section
        $updated = $teamSection->update($validated);


        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Team Section thành công!',
                'data' => $teamSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Team Section thành công!');
    }

    public function updateHomeAwards(Request $request)
    {
     

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'award_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'award_1_year' => 'nullable|string|max:10',
                'award_1_title_vi' => 'nullable|string|max:255',
                'award_1_title_en' => 'nullable|string|max:255',
                'award_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'award_2_year' => 'nullable|string|max:10',
                'award_2_title_vi' => 'nullable|string|max:255',
                'award_2_title_en' => 'nullable|string|max:255',
                'award_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'award_3_year' => 'nullable|string|max:10',
                'award_3_title_vi' => 'nullable|string|max:255',
                'award_3_title_en' => 'nullable|string|max:255',
                'award_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'award_4_year' => 'nullable|string|max:10',
                'award_4_title_vi' => 'nullable|string|max:255',
                'award_4_title_en' => 'nullable|string|max:255',
                'award_5_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'award_5_year' => 'nullable|string|max:10',
                'award_5_title_vi' => 'nullable|string|max:255',
                'award_5_title_en' => 'nullable|string|max:255',
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

        $awardsSection = HomeAwardsSection::firstOrCreate([]);

        // Remove icon fields from validated data
        for ($i = 1; $i <= 5; $i++) {
            unset($validated['award_' . $i . '_icon']);
        }

        // Handle icon uploads
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('award_' . $i . '_icon')) {
                $file = $request->file('award_' . $i . '_icon');
                $filename = time() . '_award_' . $i . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/awards'), $filename);
                $validated['award_' . $i . '_icon'] = '/uploads/awards/' . $filename;
            }
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update awards section
        $updated = $awardsSection->update($validated);


        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Awards Section thành công!',
                'data' => $awardsSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Awards Section thành công!');
    }

    public function updateHomeTestimonials(Request $request)
    {

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'rating_score' => 'nullable|string|max:10',
                'customer_count' => 'nullable|string|max:50',
                'customer_text_vi' => 'nullable|string|max:255',
                'customer_text_en' => 'nullable|string|max:255',
                'testimonial_1_name' => 'nullable|string|max:255',
                'testimonial_1_position_vi' => 'nullable|string|max:255',
                'testimonial_1_position_en' => 'nullable|string|max:255',
                'testimonial_1_company' => 'nullable|string|max:255',
                'testimonial_1_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'testimonial_1_quote_vi' => 'nullable|string',
                'testimonial_1_quote_en' => 'nullable|string',
                'testimonial_1_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_2_name' => 'nullable|string|max:255',
                'testimonial_2_position_vi' => 'nullable|string|max:255',
                'testimonial_2_position_en' => 'nullable|string|max:255',
                'testimonial_2_company' => 'nullable|string|max:255',
                'testimonial_2_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'testimonial_2_quote_vi' => 'nullable|string',
                'testimonial_2_quote_en' => 'nullable|string',
                'testimonial_2_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_3_name' => 'nullable|string|max:255',
                'testimonial_3_position_vi' => 'nullable|string|max:255',
                'testimonial_3_position_en' => 'nullable|string|max:255',
                'testimonial_3_company' => 'nullable|string|max:255',
                'testimonial_3_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'testimonial_3_quote_vi' => 'nullable|string',
                'testimonial_3_quote_en' => 'nullable|string',
                'testimonial_3_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_4_name' => 'nullable|string|max:255',
                'testimonial_4_position_vi' => 'nullable|string|max:255',
                'testimonial_4_position_en' => 'nullable|string|max:255',
                'testimonial_4_company' => 'nullable|string|max:255',
                'testimonial_4_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
                'testimonial_4_quote_vi' => 'nullable|string',
                'testimonial_4_quote_en' => 'nullable|string',
                'testimonial_4_rating' => 'nullable|integer|min:1|max:5',
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

        $testimonialsSection = HomeTestimonialsSection::firstOrCreate([]);

        // Remove avatar fields from validated data
        for ($i = 1; $i <= 4; $i++) {
            unset($validated['testimonial_' . $i . '_avatar']);
        }

        // Handle avatar uploads
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile('testimonial_' . $i . '_avatar')) {
                $file = $request->file('testimonial_' . $i . '_avatar');
                $filename = time() . '_testimonial_' . $i . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/testimonials'), $filename);
                $validated['testimonial_' . $i . '_avatar'] = '/uploads/testimonials/' . $filename;
            }
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update testimonials section
        $updated = $testimonialsSection->update($validated);

       

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Testimonials Section thành công!',
                'data' => $testimonialsSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Testimonials Section thành công!');
    }

    public function updateHomeNews(Request $request)
    {
    
        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
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

        $newsSection = HomeNewsSection::firstOrCreate([]);

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update news section
        $updated = $newsSection->update($validated);

      

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật News Section thành công!',
                'data' => $newsSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật News Section thành công!');
    }

    public function updateHomeContact(Request $request)
    {
        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'map_url' => 'nullable|string',
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

        $contactSection = HomeContactSection::firstOrCreate([]);

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update contact section
        $updated = $contactSection->update($validated);

      

        // Return JSON response for AJAX
        if ($request->wantsJson() || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật Contact Section thành công!',
                'data' => $contactSection->fresh()
            ]);
        }

        return redirect()->route('content-setup.home')
            ->with('success', 'Cập nhật Contact Section thành công!');
    }
}
