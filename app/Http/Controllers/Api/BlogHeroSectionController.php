<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogHeroSection;
use Illuminate\Http\Request;

class BlogHeroSectionController extends Controller
{
    public function index()
    {
        return response()->json(BlogHeroSection::all());
    }
}
