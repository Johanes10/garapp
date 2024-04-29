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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('subtotal');
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_invoice');
            $table->unsignedBigInteger('id_service_products');
            $table->timestamps();
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_invoice')->references('id')->on('invoices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_service_products')->references('id')->on('service_products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
