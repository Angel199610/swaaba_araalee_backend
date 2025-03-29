<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumCar extends Model
{
    protected $fillable = [
        'title', 'brand', 'price', 'mileage', 'transmission', 'engine', 'color', 'location',
        'image_front', 'image_back', 'image_inside'
    ];
}