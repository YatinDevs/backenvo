<?php

namespace App\Http\Controllers\Api;


use App\Models\CompanyInformation;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyInformationController extends Controller
{
    /**
     * Get company info (for API consumers, if needed)
     */
    public function index(): JsonResponse
    {
        $data = CompanyInformation::first();
        return response()->json($data);
    }

}