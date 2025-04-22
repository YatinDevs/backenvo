<?php
namespace App\Http\Controllers\Api;

use App\Models\Leader;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function index()
    {
        return response()->json(Leader::all());
    }
}