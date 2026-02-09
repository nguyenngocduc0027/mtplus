<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::ordered()->paginate(20);
        return view('backend.pages.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('backend.pages.careers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:careers,slug',
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract,internship',
            'experience_required' => 'nullable|string|max:255',
            'salary_display' => 'nullable|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'salary_currency' => 'nullable|string|max:10',
            'salary_period' => 'nullable|in:hourly,monthly,annually',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'responsibilities_vi' => 'nullable|array',
            'responsibilities_en' => 'nullable|array',
            'qualifications_vi' => 'nullable|array',
            'qualifications_en' => 'nullable|array',
            'benefits_vi' => 'nullable|array',
            'benefits_en' => 'nullable|array',
            'application_deadline' => 'nullable|date',
            'application_email' => 'nullable|email|max:255',
            'application_url' => 'nullable|url',
            'positions_available' => 'nullable|integer|min:1',
            'department_vi' => 'nullable|string|max:255',
            'department_en' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/careers'), $filename);
            $validated['image'] = '/uploads/careers/' . $filename;
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_en']);
        }

        Career::create($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.careers.create_success')
            ]);
        }

        return redirect()->route('admin.careers.index')
            ->with('success', __('admin.careers.create_success'));
    }

    public function show(Career $career)
    {
        return view('backend.pages.careers.show', compact('career'));
    }

    public function edit(Career $career)
    {
        return view('backend.pages.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:careers,slug,' . $career->id,
            'location_vi' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract,internship',
            'experience_required' => 'nullable|string|max:255',
            'salary_display' => 'nullable|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'salary_currency' => 'nullable|string|max:10',
            'salary_period' => 'nullable|in:hourly,monthly,annually',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description_vi' => 'nullable|string',
            'description_en' => 'nullable|string',
            'responsibilities_vi' => 'nullable|array',
            'responsibilities_en' => 'nullable|array',
            'qualifications_vi' => 'nullable|array',
            'qualifications_en' => 'nullable|array',
            'benefits_vi' => 'nullable|array',
            'benefits_en' => 'nullable|array',
            'application_deadline' => 'nullable|date',
            'application_email' => 'nullable|email|max:255',
            'application_url' => 'nullable|url',
            'positions_available' => 'nullable|integer|min:1',
            'department_vi' => 'nullable|string|max:255',
            'department_en' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Only delete old image if it's an uploaded file
            if ($career->image && str_starts_with($career->image, '/uploads/')) {
                $oldImagePath = public_path($career->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/careers'), $filename);
            $validated['image'] = '/uploads/careers/' . $filename;
        }

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Update slug if title changed
        if ($request->title_en != $career->title_en && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_en']);
        }

        $career->update($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.careers.update_success')
            ]);
        }

        return redirect()->route('admin.careers.index')
            ->with('success', __('admin.careers.update_success'));
    }

    public function destroy(Career $career)
    {
        // Only delete image if it's an uploaded file
        if ($career->image && str_starts_with($career->image, '/uploads/')) {
            $imagePath = public_path($career->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $career->delete();

        return redirect()->route('admin.careers.index')
            ->with('success', __('admin.careers.delete_success'));
    }
}
