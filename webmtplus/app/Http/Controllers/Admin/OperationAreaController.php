<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OperationArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Import Str for slug generation
use Illuminate\Support\Facades\Storage;

class OperationAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = OperationArea::query();

        if ($search = $request->input('search')) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('subtitle', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%')
                  ->orWhere('slug', 'like', '%' . $search . '%');
        }

        $operationAreas = $query->get();
        return view('admin.operation_areas.index', compact('operationAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.operation_areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_path_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string',
            'card_1_text' => 'nullable|string',
            'card_2_text' => 'nullable|string',
            'card_3_text' => 'nullable|string',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('uploads/operation_areas', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        if ($request->hasFile('image_path_2')) {
            $imagePath2 = $request->file('image_path_2')->store('uploads/operation_areas', 'public');
            $validatedData['image_path_2'] = $imagePath2;
        }

        OperationArea::create($validatedData);

        return redirect()->route('admin.operation_areas.index')->with('success', 'Operation Area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OperationArea $operationArea)
    {
        return view('admin.operation_areas.show', compact('operationArea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OperationArea $operationArea)
    {
        return view('admin.operation_areas.edit', compact('operationArea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OperationArea $operationArea)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_path_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        if ($request->hasFile('image_path')) {
            if ($operationArea->image_path) {
                Storage::disk('public')->delete($operationArea->image_path);
            }
            $imagePath = $request->file('image_path')->store('uploads/operation_areas', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        if ($request->hasFile('image_path_2')) {
            if ($operationArea->image_path_2) {
                Storage::disk('public')->delete($operationArea->image_path_2);
            }
            $imagePath2 = $request->file('image_path_2')->store('uploads/operation_areas', 'public');
            $validatedData['image_path_2'] = $imagePath2;
        }

        $operationArea->update($validatedData);

        return redirect()->route('admin.operation_areas.index')->with('success', 'Operation Area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperationArea $operationArea)
    {
        if ($operationArea->image_path) {
            Storage::disk('public')->delete($operationArea->image_path);
        }
        if ($operationArea->image_path_2) {
            Storage::disk('public')->delete($operationArea->image_path_2);
        }
        $operationArea->delete();

        return redirect()->route('admin.operation_areas.index')->with('success', 'Operation Area deleted successfully.');
    }
}
