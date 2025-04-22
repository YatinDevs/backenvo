<?php

namespace App\Http\Controllers\Api;


use App\Models\VideoSection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VideoSectionController extends Controller
{
    public function index()
    {
        $videoSection = VideoSection::first();
        return response()->json($videoSection);
    }
}
