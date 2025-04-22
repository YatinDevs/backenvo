<?php

namespace App\Http\Controllers\Api;

use App\Models\Expertise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index() {
        return response()->json(Expertise::all());
    }
}
