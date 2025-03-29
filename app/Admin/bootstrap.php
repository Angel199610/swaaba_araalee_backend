<?php

use OpenAdmin\Admin\Facades\Admin;
use App\Admin\Controllers\PremiumCarController;


Admin::menu(function ($menu) {
    // Clear all default menu items
    $menu->clear();

    // Add only Hybrid Cars
    $menu->add([
        'title' => 'Hybrid Cars',
        'uri'   => 'hybrid-cars',
        'icon'  => 'fa-car',
    ]);

    $menu->add([
        'title' => 'Premium Cars',
        'uri'   => 'premium-cars',
        'icon'  => 'fa-car',
    ]);


    // Log the menu items for debugging
    \Log::info('Admin Menu Items: ' . json_encode($menu->items()));
   
});

OpenAdmin\Admin\Form::forget(['editor']);
\Log::info('Attempting to resolve PremiumCarController: ' . get_class(new PremiumCarController()));