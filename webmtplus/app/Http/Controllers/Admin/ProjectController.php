<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::ordered()->paginate(20);
        return view('backend.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects,slug',
            'project_number' => 'nullable|string|max:50',
            'status' => 'required|in:in_progress,completed',
            'project_type_vi' => 'nullable|string|max:255',
            'project_type_en' => 'nullable|string|max:255',
            'commencement_date' => 'nullable|date',
            'completion_date' => 'nullable|date',
            'short_description_vi' => 'nullable|string',
            'short_description_en' => 'nullable|string',
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'features_vi' => 'nullable|array',
            'features_en' => 'nullable|array',
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'client_name' => 'nullable|string|max:255',
            'budget' => 'nullable|numeric|min:0',
            'area' => 'nullable|string|max:100',
            'order' => 'nullable|integer',
        ]);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
            $validated['main_image'] = '/uploads/projects/' . $filename;
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $index => $image) {
                $filename = time() . '_gallery_' . $index . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/projects/gallery'), $filename);
                $galleryPaths[] = '/uploads/projects/gallery/' . $filename;
            }
            $validated['gallery_images'] = $galleryPaths;
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_vi']);
        }

        // Auto-generate project number if not provided
        if (empty($validated['project_number'])) {
            $lastProject = Project::orderBy('id', 'desc')->first();
            $nextNumber = $lastProject ? (int)substr($lastProject->project_number, -2) + 1 : 1;
            $validated['project_number'] = str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
        }

        Project::create($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.projects.create_success')
            ]);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.projects.create_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('backend.pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('backend.pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects,slug,' . $project->id,
            'project_number' => 'nullable|string|max:50',
            'status' => 'required|in:in_progress,completed',
            'project_type_vi' => 'nullable|string|max:255',
            'project_type_en' => 'nullable|string|max:255',
            'commencement_date' => 'nullable|date',
            'completion_date' => 'nullable|date',
            'short_description_vi' => 'nullable|string',
            'short_description_en' => 'nullable|string',
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
            'features_vi' => 'nullable|array',
            'features_en' => 'nullable|array',
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'client_name' => 'nullable|string|max:255',
            'budget' => 'nullable|numeric|min:0',
            'area' => 'nullable|string|max:100',
            'order' => 'nullable|integer',
        ]);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            // Delete old image if exists
            if ($project->main_image && file_exists(public_path($project->main_image))) {
                unlink(public_path($project->main_image));
            }

            $file = $request->file('main_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
            $validated['main_image'] = '/uploads/projects/' . $filename;
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            // Delete old gallery images if requested
            if ($request->has('delete_gallery_images') && $project->gallery_images) {
                foreach ($project->gallery_images as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }

            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $index => $image) {
                $filename = time() . '_gallery_' . $index . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/projects/gallery'), $filename);
                $galleryPaths[] = '/uploads/projects/gallery/' . $filename;
            }
            $validated['gallery_images'] = $galleryPaths;
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Update slug if title_vi changed
        if ($request->title_vi != $project->title_vi && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_vi']);
        }

        $project->update($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.projects.update_success')
            ]);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.projects.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete main image if exists
        if ($project->main_image && file_exists(public_path($project->main_image))) {
            unlink(public_path($project->main_image));
        }

        // Delete gallery images if exist
        if ($project->gallery_images) {
            foreach ($project->gallery_images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', __('admin.projects.delete_success'));
    }
}
