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
        Schema::create('property_feature', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->references('id')->on('properties');
            $table->foreignId('feature_id')->references('id')->on('features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_feature');
    }
};
