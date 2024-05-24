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
            $table->integer('price_up_to_seventy');
            $table->integer('price_above_seventy');
            $table->integer('lead_time');
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
