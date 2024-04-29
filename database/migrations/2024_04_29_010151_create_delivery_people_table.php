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
        Schema::create('delivery_people', function (Blueprint $table) {
            $table->id();
            $table->integer('license_number');
            $table->unsignedBigInteger('id_people');
            $table->unsignedBigInteger('id_vehicles');
            $table->foreign('id_people')->references('id')->on('people');
            $table->foreign('id_vehicles')->references('id')->on('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_people');
    }
};
