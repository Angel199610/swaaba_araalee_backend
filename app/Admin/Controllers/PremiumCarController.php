<?php

namespace App\Admin\Controllers;

use App\Models\PremiumCar;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class PremiumCarController extends AdminController
{
    protected $title = 'Premium Cars';

    protected function grid()
    {
        $grid = new Grid(new PremiumCar());
        $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Title'));
        $grid->column('brand', __('Brand'))->after('title');
        $grid->column('price', __('Price'));
        $grid->column('mileage', __('Mileage'));
        $grid->column('image_front')->image('', 100, 100);
        $grid->column('image_back')->image('', 100, 100);
        $grid->column('image_inside')->image('', 100, 100);
        // $grid->column('image_front', __('Front Image'))->image('', 100, 100);
        // $grid->column('image_back', __('Back Image'))->image('', 100, 100);
        // $grid->column('image_inside', __('Inside Image'))->image('', 100, 100);
        $grid->column('created_at', __('Created At'));
        return $grid;
    }

    protected function form()
    {
        $form = new Form(new PremiumCar());
        $form->text('title', __('Title'))->rules('required');
        $form->text('brand', __('Brand'))->after('title');
        $form->text('price', __('Price'))->rules('required');
        $form->text('mileage', __('Mileage'))->rules('required');
        $form->text('transmission', __('Transmission'))->rules('required');
        $form->text('engine', __('Engine'))->rules('required');
        $form->text('color', __('Color'))->rules('required');
        $form->text('location', __('Location'))->rules('required');
        $form->image('image_front', __('Front Image'))->rules('required|image|max:2048');
        $form->image('image_back', __('Back Image'))->rules('required|image|max:2048');
        $form->image('image_inside', __('Inside Image'))->rules('required|image|max:2048');
        return $form;
    }
}