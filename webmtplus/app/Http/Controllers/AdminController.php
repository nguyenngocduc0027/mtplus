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
        return view('backend.pages.home.index', compact('heroSection', 'aboutSection', 'servicesSection', 'whyChooseSection', 'commitmentSection', 'projectSection', 'teamSection', 'awardsSection', 'testimonialsSection', 'newsSection'));
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

    public function updateHomeAbout(Request $request)
    {
        \Log::info('=== UPDATE ABOUT SECTION ===');
        \Log::info('Request data:', $request->all());

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
                'about_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'about_thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            $path = $request->file('about_main_image')->store('about', 'public');
            $validated['about_main_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('about_thumb_image')) {
            $path = $request->file('about_thumb_image')->store('about', 'public');
            $validated['about_thumb_image'] = '/storage/' . $path;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update about section
        $updated = $aboutSection->update($validated);

        \Log::info('About section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'about_id' => $aboutSection->id
        ]);

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
        \Log::info('=== UPDATE SERVICES SECTION ===');
        \Log::info('Request data:', $request->all());

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
                'service_1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'service_1_url' => 'nullable|string|max:255',
                'service_2_title_vi' => 'nullable|string|max:255',
                'service_2_title_en' => 'nullable|string|max:255',
                'service_2_desc_vi' => 'nullable|string',
                'service_2_desc_en' => 'nullable|string',
                'service_2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'service_2_url' => 'nullable|string|max:255',
                'service_3_title_vi' => 'nullable|string|max:255',
                'service_3_title_en' => 'nullable|string|max:255',
                'service_3_desc_vi' => 'nullable|string',
                'service_3_desc_en' => 'nullable|string',
                'service_3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            $path = $request->file('service_1_image')->store('services', 'public');
            $validated['service_1_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('service_2_image')) {
            $path = $request->file('service_2_image')->store('services', 'public');
            $validated['service_2_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('service_3_image')) {
            $path = $request->file('service_3_image')->store('services', 'public');
            $validated['service_3_image'] = '/storage/' . $path;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update services section
        $updated = $servicesSection->update($validated);

        \Log::info('Services section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'services_id' => $servicesSection->id
        ]);

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
        \Log::info('=== UPDATE WHY CHOOSE SECTION ===');
        \Log::info('Request data:', $request->all());

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'feature_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_1_title_vi' => 'nullable|string|max:255',
                'feature_1_title_en' => 'nullable|string|max:255',
                'feature_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_2_title_vi' => 'nullable|string|max:255',
                'feature_2_title_en' => 'nullable|string|max:255',
                'feature_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_3_title_vi' => 'nullable|string|max:255',
                'feature_3_title_en' => 'nullable|string|max:255',
                'feature_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_4_title_vi' => 'nullable|string|max:255',
                'feature_4_title_en' => 'nullable|string|max:255',
                'button_url' => 'nullable|string|max:255',
                'ceo_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'ceo_quote_vi' => 'nullable|string',
                'ceo_quote_en' => 'nullable|string',
                'ceo_name' => 'nullable|string|max:255',
                'ceo_position_vi' => 'nullable|string|max:255',
                'ceo_position_en' => 'nullable|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            $path = $request->file('feature_1_icon')->store('why-choose/icons', 'public');
            $validated['feature_1_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_2_icon')) {
            $path = $request->file('feature_2_icon')->store('why-choose/icons', 'public');
            $validated['feature_2_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_3_icon')) {
            $path = $request->file('feature_3_icon')->store('why-choose/icons', 'public');
            $validated['feature_3_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_4_icon')) {
            $path = $request->file('feature_4_icon')->store('why-choose/icons', 'public');
            $validated['feature_4_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('ceo_avatar')) {
            $path = $request->file('ceo_avatar')->store('why-choose', 'public');
            $validated['ceo_avatar'] = '/storage/' . $path;
        }

        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('why-choose', 'public');
            $validated['main_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('thumb_image')) {
            $path = $request->file('thumb_image')->store('why-choose', 'public');
            $validated['thumb_image'] = '/storage/' . $path;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update why choose section
        $updated = $whyChooseSection->update($validated);

        \Log::info('Why Choose section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'why_choose_id' => $whyChooseSection->id
        ]);

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
        \Log::info('=== UPDATE COMMITMENT SECTION ===');
        \Log::info('Request data:', $request->all());

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'description_vi' => 'nullable|string',
                'description_en' => 'nullable|string',
                'feature_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_1_title_vi' => 'nullable|string|max:255',
                'feature_1_title_en' => 'nullable|string|max:255',
                'feature_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_2_title_vi' => 'nullable|string|max:255',
                'feature_2_title_en' => 'nullable|string|max:255',
                'feature_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_3_title_vi' => 'nullable|string|max:255',
                'feature_3_title_en' => 'nullable|string|max:255',
                'feature_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'feature_4_title_vi' => 'nullable|string|max:255',
                'feature_4_title_en' => 'nullable|string|max:255',
                'button_url' => 'nullable|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            $path = $request->file('feature_1_icon')->store('commitment/icons', 'public');
            $validated['feature_1_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_2_icon')) {
            $path = $request->file('feature_2_icon')->store('commitment/icons', 'public');
            $validated['feature_2_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_3_icon')) {
            $path = $request->file('feature_3_icon')->store('commitment/icons', 'public');
            $validated['feature_3_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('feature_4_icon')) {
            $path = $request->file('feature_4_icon')->store('commitment/icons', 'public');
            $validated['feature_4_icon'] = '/storage/' . $path;
        }

        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('commitment', 'public');
            $validated['main_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('thumb_image')) {
            $path = $request->file('thumb_image')->store('commitment', 'public');
            $validated['thumb_image'] = '/storage/' . $path;
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update commitment section
        $updated = $commitmentSection->update($validated);

        \Log::info('Commitment section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'commitment_id' => $commitmentSection->id
        ]);

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
        \Log::info('=== UPDATE PROJECT SECTION ===');
        \Log::info('Request data:', $request->all());

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

        \Log::info('Project section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'project_id' => $projectSection->id
        ]);

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
        \Log::info('=== UPDATE TEAM SECTION ===');
        \Log::info('Request data:', $request->all());

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

        \Log::info('Team section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'team_id' => $teamSection->id
        ]);

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
        \Log::info('=== UPDATE AWARDS SECTION ===');
        \Log::info('Request data:', $request->all());

        try {
            $validated = $request->validate([
                'subtitle_vi' => 'nullable|string|max:255',
                'subtitle_en' => 'nullable|string|max:255',
                'heading_vi' => 'nullable|string',
                'heading_en' => 'nullable|string',
                'award_1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'award_1_year' => 'nullable|string|max:10',
                'award_1_title_vi' => 'nullable|string|max:255',
                'award_1_title_en' => 'nullable|string|max:255',
                'award_2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'award_2_year' => 'nullable|string|max:10',
                'award_2_title_vi' => 'nullable|string|max:255',
                'award_2_title_en' => 'nullable|string|max:255',
                'award_3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'award_3_year' => 'nullable|string|max:10',
                'award_3_title_vi' => 'nullable|string|max:255',
                'award_3_title_en' => 'nullable|string|max:255',
                'award_4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'award_4_year' => 'nullable|string|max:10',
                'award_4_title_vi' => 'nullable|string|max:255',
                'award_4_title_en' => 'nullable|string|max:255',
                'award_5_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                $path = $request->file('award_' . $i . '_icon')->store('awards', 'public');
                $validated['award_' . $i . '_icon'] = '/storage/' . $path;
            }
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update awards section
        $updated = $awardsSection->update($validated);

        \Log::info('Awards section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'awards_id' => $awardsSection->id
        ]);

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
        \Log::info('=== UPDATE TESTIMONIALS SECTION ===');
        \Log::info('Request data:', $request->all());

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
                'testimonial_1_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'testimonial_1_quote_vi' => 'nullable|string',
                'testimonial_1_quote_en' => 'nullable|string',
                'testimonial_1_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_2_name' => 'nullable|string|max:255',
                'testimonial_2_position_vi' => 'nullable|string|max:255',
                'testimonial_2_position_en' => 'nullable|string|max:255',
                'testimonial_2_company' => 'nullable|string|max:255',
                'testimonial_2_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'testimonial_2_quote_vi' => 'nullable|string',
                'testimonial_2_quote_en' => 'nullable|string',
                'testimonial_2_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_3_name' => 'nullable|string|max:255',
                'testimonial_3_position_vi' => 'nullable|string|max:255',
                'testimonial_3_position_en' => 'nullable|string|max:255',
                'testimonial_3_company' => 'nullable|string|max:255',
                'testimonial_3_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'testimonial_3_quote_vi' => 'nullable|string',
                'testimonial_3_quote_en' => 'nullable|string',
                'testimonial_3_rating' => 'nullable|integer|min:1|max:5',
                'testimonial_4_name' => 'nullable|string|max:255',
                'testimonial_4_position_vi' => 'nullable|string|max:255',
                'testimonial_4_position_en' => 'nullable|string|max:255',
                'testimonial_4_company' => 'nullable|string|max:255',
                'testimonial_4_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                $path = $request->file('testimonial_' . $i . '_avatar')->store('testimonials', 'public');
                $validated['testimonial_' . $i . '_avatar'] = '/storage/' . $path;
            }
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update testimonials section
        $updated = $testimonialsSection->update($validated);

        \Log::info('Testimonials section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'testimonials_id' => $testimonialsSection->id
        ]);

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
        \Log::info('=== UPDATE NEWS SECTION ===');
        \Log::info('Request data:', $request->all());

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

        \Log::info('News section updated:', [
            'success' => $updated,
            'validated_data' => $validated,
            'news_id' => $newsSection->id
        ]);

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
}
