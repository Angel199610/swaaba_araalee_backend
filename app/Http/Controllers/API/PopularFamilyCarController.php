<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PopularFamilyCar;
use Illuminate\Http\Request;

class PopularFamilyCarController extends Controller
{
    public function index(Request $request)
    {
        $query = PopularFamilyCar::query();

        if ($request->has('brand')) {
            $query->where('brand', $request->input('brand'));
        }

        $cars = $query->get();
        return response()->json(['cars' => $cars], 200);
    }
}