<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('luxury_cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('image_front')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_inside')->nullable();
            $table->string('image_beside')->nullable();
            $table->string('image_full')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('ref_no')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('model_code')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel')->nullable();
            $table->string('engine_code')->nullable();
            $table->integer('engine_size')->nullable();
            $table->string('ext_color')->nullable();
            $table->string('location')->nullable();
            $table->string('registration_year_month')->nullable();
            $table->string('manufacture_year_month')->nullable();
            $table->string('drive')->nullable();
            $table->integer('doors')->nullable();
            $table->integer('seats')->nullable();
            $table->string('steering')->nullable();
            $table->string('dimensions')->nullable();
            $table->integer('weight')->nullable();
            $table->float('m3')->nullable();
            $table->string('max_cap')->nullable();
            $table->string('sub_ref_no')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('luxury_cars');
    }
};