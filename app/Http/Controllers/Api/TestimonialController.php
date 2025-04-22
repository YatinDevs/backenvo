<?php

namespace App\Http\Controllers\Api;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
     // Fetch all testimonials
     public function index()
     {
         $testimonials = Testimonial::all();
         return response()->json($testimonials);
     }
}
