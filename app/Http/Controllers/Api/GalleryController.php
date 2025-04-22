<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return Gallery::latest()->get()->map(function ($item) {
            // Generate full public URL for each image
            $item->image_url = asset('uploads/' . $item->image);
            return $item;
        });
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'image' => 'required|image|max:2048'
    ]);

    // Store using the same disk as Filament
    $imagePath = $request->file('image')
                ->store('gallery', 'public_uploads');

    $gallery = Gallery::create([
        'name' => $validated['name'],
        'image' => $imagePath // Will be 'gallery/filename.jpg'
    ]);

    return response()->json([
        'gallery' => $gallery,
        'image_url' => asset('uploads/' . $imagePath)
    ], 201);
    }
}