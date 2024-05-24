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
        Schema::create('trucking_prices', function (Blueprint $table) {
            $table->id();
            $table->string('rute');
            $table->unsignedBigInteger('blind_van');
            $table->unsignedBigInteger('cde_box');
            $table->unsignedBigInteger('cdd_box');
            $table->unsignedBigInteger('fuso_box');
            $table->unsignedBigInteger('wing_box');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucking_prices');
    }
};
