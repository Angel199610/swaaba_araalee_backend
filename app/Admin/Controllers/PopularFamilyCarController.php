<?php

namespace App\Admin\Controllers;

use App\Models\PopularFamilyCar;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class PopularFamilyCarController extends AdminController
{
    protected $title = 'PopularFamilyCar';

    protected function grid()
    {
        $grid = new Grid(new PopularFamilyCar());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('brand', __('Brand'))->after('title');
        $grid->column('price', __('Price'));
        $grid->column('monthly', __('Monthly'));
        $grid->column('year', __('Year'));
        $grid->column('image_front', __('Image Front'))->image();
        $grid->column('image_back', __('Image Back'))->image();
        $grid->column('image_inside', __('Image Inside'))->image();
        $grid->column('image_beside', __('Image Beside'))->image();
        $grid->column('image_full', __('Image Full'))->image();
        $grid->column('featured', __('Featured'));
        $grid->column('ref_no', __('Ref No'));
        $grid->column('chassis_no', __('Chassis No'));
        $grid->column('model_code', __('Model Code'));
        $grid->column('mileage', __('Mileage'));
        $grid->column('transmission', __('Transmission'));
        $grid->column('fuel', __('Fuel'));
        $grid->column('engine_code', __('Engine Code'));
        $grid->column('engine_size', __('Engine Size'));
        $grid->column('ext_color', __('Ext Color'));
        $grid->column('location', __('Location'));
        $grid->column('registration_year_month', __('Registration Year Month'));
        $grid->column('manufacture_year_month', __('Manufacture Year Month'));
        $grid->column('drive', __('Drive'));
        $grid->column('doors', __('Doors'));
        $grid->column('seats', __('Seats'));
        $grid->column('steering', __('Steering'));
        $grid->column('dimensions', __('Dimensions'));
        $grid->column('weight', __('Weight'));
        $grid->column('m3', __('M3'));
        $grid->column('max_cap', __('Max Cap'));
        $grid->column('sub_ref_no', __('Sub Ref No'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(PopularFamilyCar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('brand', __('Brand'))->after('title');
        $show->field('price', __('Price'));
        $show->field('monthly', __('Monthly'));
        $show->field('year', __('Year'));
        $show->field('image_front', __('Image Front'))->image();
        $show->field('image_back', __('Image Back'))->image();
        $show->field('image_inside', __('Image Inside'))->image();
        $show->field('image_beside', __('Image Beside'))->image();
        $show->field('image_full', __('Image Full'))->image();
        $show->field('featured', __('Featured'));
        $show->field('ref_no', __('Ref No'));
        $show->field('chassis_no', __('Chassis No'));
        $show->field('model_code', __('Model Code'));
        $show->field('mileage', __('Mileage'));
        $show->field('transmission', __('Transmission'));
        $show->field('fuel', __('Fuel'));
        $show->field('engine_code', __('Engine Code'));
        $show->field('engine_size', __('Engine Size'));
        $show->field('ext_color', __('Ext Color'));
        $show->field('location', __('Location'));
        $show->field('registration_year_month', __('Registration Year Month'));
        $show->field('manufacture_year_month', __('Manufacture Year Month'));
        $show->field('drive', __('Drive'));
        $show->field('doors', __('Doors'));
        $show->field('seats', __('Seats'));
        $show->field('steering', __('Steering'));
        $show->field('dimensions', __('Dimensions'));
        $show->field('weight', __('Weight'));
        $show->field('m3', __('M3'));
        $show->field('max_cap', __('Max Cap'));
        $show->field('sub_ref_no', __('Sub Ref No'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new PopularFamilyCar());

        $form->text('title', __('Title'));
        $form->text('brand', __('Brand'))->after('title');
        $form->text('price', __('Price'));
        $form->text('monthly', __('Monthly'));
        $form->number('year', __('Year'));
        $form->image('image_front', __('Image Front'));
        $form->image('image_back', __('Image Back'));
        $form->image('image_inside', __('Image Inside'));
        $form->image('image_beside', __('Image Beside'));
        $form->image('image_full', __('Image Full'));
        $form->switch('featured', __('Featured'));
        $form->text('ref_no', __('Ref No'));
        $form->text('chassis_no', __('Chassis No'));
        $form->text('model_code', __('Model Code'));
        $form->number('mileage', __('Mileage'));
        $form->text('transmission', __('Transmission'));
        $form->text('fuel', __('Fuel'));
        $form->text('engine_code', __('Engine Code'));
        $form->number('engine_size', __('Engine Size'));
        $form->text('ext_color', __('Ext Color'));
        $form->text('location', __('Location'));
        $form->text('registration_year_month', __('Registration Year Month'));
        $form->text('manufacture_year_month', __('Manufacture Year Month'));
        $form->text('drive', __('Drive'));
        $form->number('doors', __('Doors'));
        $form->number('seats', __('Seats'));
        $form->text('steering', __('Steering'));
        $form->text('dimensions', __('Dimensions'));
        $form->number('weight', __('Weight'));
        $form->decimal('m3', __('M3'));
        $form->text('max_cap', __('Max Cap'));
        $form->text('sub_ref_no', __('Sub Ref No'));

        return $form;
    }
}