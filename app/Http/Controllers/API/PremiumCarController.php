<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PremiumCar;
use Illuminate\Http\Request;

class PremiumCarController extends Controller
{
    // public function index()
    // {
    //     $cars = PremiumCar::all();
    //     return response()->json(['cars' => $cars], 200);
    // }

    public function index(Request $request)
    {
        $query = PremiumCar::query();

        if ($request->has('brand')) {
            $query->where('brand', $request->input('brand'));
        }

        $cars = $query->get();
        return response()->json(['cars' => $cars], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'location' => 'required|string|max255',
            'image_front' => 'required|image|max:2048',
            'image_back' => 'required|image|max:2048',
            'image_inside' => 'required|image|max:2048',
        ]);

        $car = new PremiumCar();
        $car->title = $request->title;
        $car->price = $request->price;
        $car->mileage = $request->mileage;
        $car->transmission = $request->transmission;
        $car->engine = $request->engine;
        $car->color = $request->color;
        $car->location = $request->location;

        // Handle image uploads
        $car->image_front = $request->file('image_front')->store('premium_cars/front', 'public');
        $car->image_back = $request->file('image_back')->store('premium_cars/back', 'public');
        $car->image_inside = $request->file('image_inside')->store('premium_cars/inside', 'public');

        $car->save();

        return response()->json(['message' => 'Car added successfully', 'car' => $car], 201);
    }
}