<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LuxuryCar;
use Illuminate\Http\Request;

class LuxuryCarController extends Controller
{
    public function index(Request $request)
    {
        $query = LuxuryCar::query();

        if ($request->has('brand')) {
            $query->where('brand', $request->input('brand'));
        }

        $cars = $query->get();
        return response()->json(['cars' => $cars], 200);
    }
}