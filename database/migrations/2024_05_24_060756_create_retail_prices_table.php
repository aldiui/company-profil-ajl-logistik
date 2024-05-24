<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('retail_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('distribution_center_id')->constrained('distribution_centers')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->unsignedBigInteger('harga_dibawah_tujuh_puluh');
            $table->unsignedBigInteger('harga_diatas_tujuh_puluh');
            $table->unsignedBigInteger('estimasi_hari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retail_prices');
    }
};