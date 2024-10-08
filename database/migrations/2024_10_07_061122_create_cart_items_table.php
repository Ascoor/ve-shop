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
        
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shopping_cart_id')->constrained()->onDelete('cascade'); // ربط عنصر السلة بسلة التسوق
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ربط العنصر بالمنتج
            $table->integer('quantity'); // كمية المنتج
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
