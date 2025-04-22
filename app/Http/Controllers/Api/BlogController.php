<?php

namespace App\Http\Controllers\Api;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(
            BlogPost::where('is_published', true)
                ->latest('published_date')
                ->paginate($request->input('per_page', 4))
        );
    }

    public function recent()
    {
        return response()->json(
            BlogPost::where('is_published', true)
                ->latest('published_date')
                ->limit(3)
                ->get(['id', 'title', 'slug', 'published_date', 'image_url'])
        );
    }

    public function byCategory($category = null)
    {
        $query = BlogPost::where('is_published', true)
            ->latest('published_date');
        
        if ($category) {
            $query->where('category', $category);
        }
        
        return response()->json($query->paginate(4));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        
        // Increment views if you have that column
        $post->increment('views');
        
        return response()->json([
            'post' => $post,
            'related' => BlogPost::where('category', $post->category)
                ->where('id', '!=', $post->id)
                ->where('is_published', true)
                ->latest('published_date')
                ->limit(3)
                ->get(['id', 'title', 'slug', 'published_date', 'image_url'])
        ]);
    }
}