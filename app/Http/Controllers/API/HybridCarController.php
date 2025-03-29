<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HybridCar;
use Illuminate\Http\Request;

class HybridCarController extends Controller
{
    public function index(Request $request)
    {
        $query = HybridCar::query();

        if ($request->has('brand')) {
            $query->where('brand', $request->input('brand'));
        }

        $cars = $query->get();
        return response()->json(['cars' => $cars], 200);
    }
}