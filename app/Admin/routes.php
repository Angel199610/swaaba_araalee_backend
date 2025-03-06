<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('demo/users', UserController::class);
    $router->resource('premium-cars', PremiumCarController::class);
    $router->resource('page-designer', PageDesignerController::class);
$router->resource('page-designer-images', PageDesignerImagesController::class);
$router->resource('page-designer-videos', PageDesignerVideoController::class);
$router->resource('page-designer-texts', PageDesignerTextController::class);
$router->resource('page-designer-inline-galleries', PageDesignerInlineGalleryController::class);
$router->resource('page-designer-embeds', PageDesignerEmbedController::class);

});
