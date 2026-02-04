<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->paginate(20);
        return view('backend.pages.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.pages.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug',
            'short_description_vi' => 'nullable|string|max:255',
            'short_description_en' => 'nullable|string|max:255',
            'content_vi' => 'nullable|string',
            'content_en' => 'nullable|string',
        ]);

     
        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_vi']);
        }

        Service::create($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thêm dịch vụ thành công!'
            ]);
        }

        return redirect()->route('admin.services.index')
            ->with('success', 'Thêm dịch vụ thành công!');
    }

    public function show(Service $service)
    {
        return view('backend.pages.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('backend.pages.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title_vi' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug,' . $service->id,
            'short_description_vi' => 'nullable|string|max:255',
            'short_description_en' => 'nullable|string|max:255',
            'content_vi' => 'nullable|string',
            'content_en' => 'nullable|string',
        ]);

        // Handle checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        // Update slug if title_vi changed
        if ($request->title_vi != $service->title_vi && empty($validated['slug'])) {
            $validated['slug'] = \Str::slug($validated['title_vi']);
        }

        $service->update($validated);

        // Check if AJAX request
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cập nhật dịch vụ thành công!'
            ]);
        }

        return redirect()->route('admin.services.index')
            ->with('success', 'Cập nhật dịch vụ thành công!');
    }

    public function destroy(Service $service)
    {
        

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Xóa dịch vụ thành công!');
    }
}
