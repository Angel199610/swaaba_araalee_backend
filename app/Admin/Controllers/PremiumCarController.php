<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PremiumCar;

class PremiumCarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PremiumCar';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PremiumCar());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('title', __('Title'));
        $grid->column('price', __('Price'));
        $grid->column('mileage', __('Mileage'));
        $grid->column('transmission', __('Transmission'));
        $grid->column('engine', __('Engine'));
        $grid->column('color', __('Color'));
        $grid->column('location', __('Location'));
        $grid->column('contact seller', __('Contact seller'));
        $grid->column('WhatsApp', __('WhatsApp'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(PremiumCar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('price', __('Price'));
        $show->field('mileage', __('Mileage'));
        $show->field('transmission', __('Transmission'));
        $show->field('engine', __('Engine'));
        $show->field('color', __('Color'));
        $show->field('location', __('Location'));
        $show->field('contact seller', __('Contact seller'));
        $show->field('WhatsApp', __('WhatsApp'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PremiumCar());

        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->number('price', __('Price'));
        $form->text('mileage', __('Mileage'));
        $form->text('transmission', __('Transmission'));
        $form->text('engine', __('Engine'));
        $form->color('color', __('Color'));
        $form->text('location', __('Location'));
        $form->number('contact seller', __('Contact seller'));
        $form->number('WhatsApp', __('WhatsApp'));

        return $form;
    }
}
