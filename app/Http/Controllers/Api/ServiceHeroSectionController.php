<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ServiceHeroSection;
use Illuminate\Http\Request;

class ServiceHeroSectionController extends Controller
{
    public function index()
    {
        return response()->json(ServiceHeroSection::all());
    }
}