<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSellerPhoneToHybridCarsTable extends Migration
{
    public function up(): void
{
    Schema::table('hybrid_cars', function (Blueprint $table) {
        $table->string('seller_phone')->nullable()->after('sub_ref_no');
    });
}

public function down(): void
{
    Schema::table('hybrid_cars', function (Blueprint $table) {
        $table->dropColumn('seller_phone');
    });
}
}
