<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuxuryCar extends Model
{
    protected $fillable = [
        'title',
        'brand',
        'price',
        'image_front',
        'image_back',
        'image_inside',
        'image_beside',
        'image_full',
        'featured',
        'ref_no',
        'chassis_no',
        'model_code',
        'mileage',
        'transmission',
        'fuel',
        'engine_code',
        'engine_size',
        'ext_color',
        'location',
        'registration_year_month',
        'manufacture_year_month',
        'drive',
        'doors',
        'seats',
        'steering',
        'dimensions',
        'weight',
        'm3',
        'max_cap',
        'sub_ref_no',
    ];
}