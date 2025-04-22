<?php

namespace App\Http\Controllers\Api;

use App\Models\ContactDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return response()->json(ContactDetail::first());
    }
}
