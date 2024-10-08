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
        
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // ربط عنصر الطلب بالطلب
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ربط العنصر بالمنتج
            $table->integer('quantity'); // كمية المنتج
            $table->decimal('price', 10, 2); // سعر المنتج عند الطلب
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
