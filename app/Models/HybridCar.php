<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HybridCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_no',
        'chassis_no',
        'model_code',
        'engine_size',
        'location',
        'drive',
        'transmission',
        'registration_year_month',
        'manufacture_year_month',
        'mileage',
        'engine_code',
        'steering',
        'ext_color',
        'fuel',
        'seats',
        'doors',
        'm3',
        'dimensions',
        'weight',
        'max_cap',
        'sub_ref_no',
        'title',
        'brand',
        'price',
        'image_front',
        'image_back',
        'image_inside',
        'image_beside',
        'image_full',
        'featured',
        'seller_phone',
    ];
}