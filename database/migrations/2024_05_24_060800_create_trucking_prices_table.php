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
            $table->string('blindvan');
            $table->string('cde_box');
            $table->string('cdd_box');
            $table->string('fusobox');
            $table->string('wingbox');
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
