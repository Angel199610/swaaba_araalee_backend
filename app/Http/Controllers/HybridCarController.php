<?php

namespace App\Http\Controllers;

use App\Models\HybridCar;
use Illuminate\Http\Request;

class HybridCarController extends Controller
{
    public function index()
    {
        $hybridCars = HybridCar::all();
        return response()->json([
            'cars' => $hybridCars,
            'message' => 'Hybrid cars retrieved successfully',
        ], 200);
    }
}