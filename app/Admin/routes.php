<?php


use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\PremiumCarController;
use App\Admin\Controllers\HybridCarController;
use App\Admin\Controllers\LuxuryCarController;
use App\Admin\Controllers\PopularFamilyCarController;



Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'), // 'admin'
    'namespace'     => config('admin.route.namespace'), // 'App\\Admin\\Controllers'
    'middleware'    => config('admin.route.middleware'), // ['web', 'admin.auth']
    'as'            => config('admin.route.prefix') . '.', // 'admin.'
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('hybrid-cars', 'HybridCarController');
    $router->resource('premium-cars', 'PremiumCarController');
    $router->resource('luxury-cars', 'LuxuryCarController');
    $router->resource('Popular-cars', 'PopularFamilyCarController');

});