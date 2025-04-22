<?php

namespace App\Http\Controllers\Api;

use App\Models\WhoWeAre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function index()
    {
        $data = WhoWeAre::where('is_active', true)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}