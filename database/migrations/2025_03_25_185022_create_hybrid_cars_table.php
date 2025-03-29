<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hybrid_cars', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('model_code')->nullable();
            $table->integer('engine_size')->nullable(); // In cc (e.g., 1800cc)
            $table->string('location')->nullable();
            $table->string('drive')->nullable(); // e.g., 2wheel drive
            $table->string('transmission')->nullable(); // e.g., CVT
            $table->string('registration_year_month')->nullable(); // e.g., 2023/6
            $table->string('manufacture_year_month')->nullable();
            $table->integer('mileage')->nullable(); // In km (e.g., 6km)
            $table->string('engine_code')->nullable();
            $table->string('steering')->nullable(); // e.g., Right
            $table->string('ext_color')->nullable(); // e.g., Pearl
            $table->string('fuel')->nullable(); // e.g., Petrol
            $table->integer('seats')->nullable(); // e.g., 5
            $table->integer('doors')->nullable(); // e.g., 5
            $table->float('m3')->nullable(); // e.g., 13.238
            $table->string('dimensions')->nullable(); // e.g., 4.49x1.82x1.62 m
            $table->integer('weight')->nullable(); // In kg (e.g., 1410 kg)
            $table->string('max_cap')->nullable();
            $table->string('sub_ref_no')->nullable();
            $table->string('title')->nullable(); 
            $table->string('brand')->nullable()->after('title');
            $table->string('price')->nullable(); // e.g., "UGX 120,000,000"
            $table->string('image_front')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_inside')->nullable();
            $table->string('image_beside')->nullable();
            $table->string('image_full')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('hybrid_cars', function (Blueprint $table) {
            $table->dropColumn('brand');
        });
    }
};