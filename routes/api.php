<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HybridCarController;
use App\Http\Controllers\API\PremiumCarController;
use App\Http\Controllers\Api\LuxuryCarController;
use App\Http\Controllers\Api\PopularFamilyCarController;
use Illuminate\Support\Facades\Route;

Route::options('{any}', function (Request $request) {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', 'http://localhost:55849')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization');
})->where('any', '.*');

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/premium-cars', [PremiumCarController::class, 'index']);
Route::post('/premium-cars', [PremiumCarController::class, 'store']);

// Protected routes (require Sanctum authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    //Route::get('/hybrid-cars', [HybridCarController::class, 'index']);
    Route::middleware('auth:sanctum')->get('/hybrid-cars', [HybridCarController::class, 'index']);
    Route::middleware('auth:sanctum')->get('/luxury-cars', [LuxuryCarController::class, 'index']);
    Route::middleware('auth:sanctum')->get('/popular-family-cars', [PopularFamilyCarController::class, 'index']);
});