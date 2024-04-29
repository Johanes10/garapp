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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->boolean('status');
            $table->integer('quantity');
            $table->unsignedBigInteger('id_delivery_person');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_delivery_person')->references('id')->on('delivery_people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
