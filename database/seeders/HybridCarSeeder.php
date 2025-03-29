<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HybridCar;

class HybridCarSeeder extends Seeder
{
    public function run(): void
    {
        HybridCar::create([
            'ref_no' => 'BNT736276',
            'chassis_no' => 'ZSG10-1015913',
            'model_code' => 'ZSG10',
            'engine_size' => 1800,
            'location' => 'YOKOHAMA',
            'drive' => '2wheel drive',
            'transmission' => 'CVT',
            'registration_year_month' => '2023/6',
            'manufacture_year_month' => '-',
            'mileage' => 6,
            'engine_code' => '-',
            'steering' => 'Right',
            'ext_color' => 'Pearl',
            'fuel' => 'Petrol',
            'seats' => 5,
            'doors' => 5,
            'm3' => 13.238,
            'dimensions' => '4.49x1.82x1.62 m',
            'weight' => 1410,
            'max_cap' => '-',
            'sub_ref_no' => 'PRC2306011592',
            'title' => 'Toyota Hybrid 2023',
            'price' => 'UGX 120,000,000',
            'image_front' => 'uploads/images/front.jpg',
            'image_back' => 'uploads/images/back.jpeg',
            'image_inside' => 'uploads/images/insi.jpeg',
            'image_beside' => 'uploads/images/beside.jpg',
            'image_full' => 'uploads/images/full.jpg',
            'featured' => true,
            'seller_phone' => '+256780619890',
        ]);
    }
}