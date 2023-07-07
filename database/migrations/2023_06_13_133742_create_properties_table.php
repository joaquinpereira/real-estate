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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('user_id')->references('id')->on('users')->constrained();
            $table->foreignId('category_id')->references('id')->on('category_properties')->constrained();
            $table->foreignId('city_id')->references('id')->on('cities')->constrained();
            $table->foreignId('property_type_id')->references('id')->on('property_types')->constrained();
            $table->foreignId('property_status_id')->references('id')->on('property_statuses')->constrained();
            $table->string('title', 2048);
            $table->string('poster', 2048);
            $table->string('slug', 2048);
            $table->boolean('featured_Property');
            $table->text('address');
            $table->text('location')->nullable();
            $table->text('description');
            $table->string('property_size', 2048);
            $table->decimal('price',18,4)->unsigned();
            $table->enum('status', ['Pending', 'Pause', 'Active', 'Closed'])->default('Pending');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('year_built');
            $table->integer('garage');
            $table->string('garage_size', 2048);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
