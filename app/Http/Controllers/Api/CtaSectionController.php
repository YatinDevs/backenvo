<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CtaSection;
use Illuminate\Http\Request;

class CtaSectionController extends Controller
{
    public function index()
    {
        $cta = CtaSection::first();
        return response()->json($cta);
    }
}
