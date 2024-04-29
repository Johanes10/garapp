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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service_products')->unique();
            $table->unsignedBigInteger('id_establishments')->unique();
            $table->foreign('id_service_products')->references('id')->on('service_products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_establishments')->references('id')->on('establishments')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
