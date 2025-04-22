<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return response()->json($services);
    }

    public function byCategory($category)
    {
        $services = Service::where('category', $category)
                         ->orderBy('sort_order')
                         ->get();
        return response()->json($services);
    }
}
