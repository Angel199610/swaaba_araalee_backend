<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageDesignerController;
use App\Http\Controllers\HomeController;
use App\Admin\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/page/{id}', [PageDesignerController::class, 'index'])->name('page-designer');

// Add Admin Users Route
Route::get('/admin/users', [UserController::class, 'index'])->middleware('web', 'admin.auth');