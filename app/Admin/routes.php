<?php


use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\PremiumCarController;
use App\Admin\Controllers\PageDesignerController;
use App\Admin\Controllers\PageDesignerEmbedController;
use App\Admin\Controllers\PageDesignerImagesController;
use App\Admin\Controllers\PageDesignerTextController;
use App\Admin\Controllers\PageDesignerInlineGalleryController;
use App\Admin\Controllers\PageDesignerVideoController;

Admin::routes();

Route::get('admin/users', [UserController::class, 'index']);

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('premium-cars', PremiumCarController::class);
    $router->resource('page-designer', PageDesignerController::class);
    $router->resource('page-designer-images', PageDesignerImagesController::class);
    $router->resource('page-designer-videos', PageDesignerVideoController::class);
    $router->resource('page-designer-texts', PageDesignerTextController::class);
    $router->resource('page-designer-inline-galleries', PageDesignerInlineGalleryController::class);
    $router->resource('page-designer-embeds', PageDesignerEmbedController::class);

});
