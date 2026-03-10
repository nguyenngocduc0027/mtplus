<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImageUploadController extends Controller
{
     public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif,bmp,ico,tiff',
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/tinymce'), $filename);
        $path = '/uploads/tinymce/' . $filename;

        return response()->json(['location' => $path]);
    }
}
