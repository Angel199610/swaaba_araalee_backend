<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('premium_cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brand')->nullable()->after('title');
            $table->string('price');
            $table->string('mileage');
            $table->string('transmission');
            $table->string('engine');
            $table->string('color');
            $table->string('location');
            $table->string('image_front'); // Path to front image
            $table->string('image_back');  // Path to back image
            $table->string('image_inside'); // Path to inside image
            $table->timestamps();
        });
    }

    public function down()
        {
            Schema::table('premium_cars', function (Blueprint $table) {
                $table->dropColumn('brand');
            });
    }
};