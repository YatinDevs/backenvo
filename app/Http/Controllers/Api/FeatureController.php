<?php

namespace App\Http\Controllers\Api;

use App\Models\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        return response()->json(Feature::all());
    }
}
