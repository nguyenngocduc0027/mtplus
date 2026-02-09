<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::ordered()->paginate(4);
        return view('backend.pages.team.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('backend.pages.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:team_members,slug',
            'position_vi' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'detailed_position_vi' => 'nullable|string|max:255',
            'detailed_position_en' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'bio_vi' => 'nullable|string',
            'bio_en' => 'nullable|string',
            'detailed_bio_vi' => 'nullable|string',
            'detailed_bio_en' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'field_of_activity_vi' => 'nullable|string|max:255',
            'field_of_activity_en' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'fax' => 'nullable|string|max:50',
            'specialties_vi' => 'nullable|array',
            'specialties_en' => 'nullable|array',
            'experience_list_vi' => 'nullable|array',
            'experience_list_en' => 'nullable|array',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/team'), $filename);
            $validated['photo'] = '/uploads/team/' . $filename;
        }

        // Handle checkboxes (must be done before using them)
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // If setting as featured (CEO), unfeatured all others
        if ($validated['is_featured']) {
            TeamMember::where('is_featured', true)->update(['is_featured' => false]);
        }

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name']);
        }

        TeamMember::create($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.team.create_success')
            ]);
        }

        return redirect()->route('admin.team.index')
            ->with('success', __('admin.team.create_success'));
    }

    public function show(TeamMember $team)
    {
        return view('backend.pages.team.show', compact('team'));
    }

    public function edit(TeamMember $team)
    {
        return view('backend.pages.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:team_members,slug,' . $team->id,
            'position_vi' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'detailed_position_vi' => 'nullable|string|max:255',
            'detailed_position_en' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'bio_vi' => 'nullable|string',
            'bio_en' => 'nullable|string',
            'detailed_bio_vi' => 'nullable|string',
            'detailed_bio_en' => 'nullable|string',
            'experience_years' => 'nullable|integer|min:0',
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'field_of_activity_vi' => 'nullable|string|max:255',
            'field_of_activity_en' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'fax' => 'nullable|string|max:50',
            'specialties_vi' => 'nullable|array',
            'specialties_en' => 'nullable|array',
            'experience_list_vi' => 'nullable|array',
            'experience_list_en' => 'nullable|array',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Only delete old photo if it's an uploaded file, not default assets
            if ($team->photo && str_starts_with($team->photo, '/uploads/')) {
                $oldPhotoPath = public_path($team->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/team'), $filename);
            $validated['photo'] = '/uploads/team/' . $filename;
        }

        // Handle checkboxes (must be done before using them)
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // If setting as featured (CEO), unfeatured all others
        if ($validated['is_featured']) {
            TeamMember::where('is_featured', true)
                ->where('id', '!=', $team->id)
                ->update(['is_featured' => false]);
        }

        // Update slug if name changed
        if ($request->name != $team->name && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['name']);
        }

        $team->update($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.team.update_success')
            ]);
        }

        return redirect()->route('admin.team.index')
            ->with('success', __('admin.team.update_success'));
    }

    public function destroy(TeamMember $team)
    {
        // Only delete photo if it's an uploaded file, not default assets
        if ($team->photo && str_starts_with($team->photo, '/uploads/')) {
            $photoPath = public_path($team->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        $team->delete();

        return redirect()->route('admin.team.index')
            ->with('success', __('admin.team.delete_success'));
    }
}
