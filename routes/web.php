<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Admin\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); // Comment out or remove this line

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Add Admin Users Route
Route::get('/admin/users', [UserController::class, 'index'])->middleware('web', 'admin.auth');