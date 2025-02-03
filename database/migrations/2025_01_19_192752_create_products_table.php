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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('sku')->nullable();
            $table->string('barcode')->unique()->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('unit')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('discount')->default(0)->nullable();
            $table->decimal('discount_price', 8, 2)->default(0)->nullable();
            $table->decimal('cost', 8, 2)->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->decimal('tax_price', 8, 2)->nullable();
            $table->decimal('shipping', 8, 2)->nullable();
            $table->decimal('shipping_price', 8, 2)->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->decimal('total_price', 8, 2)->nullable();
            $table->decimal('profit', 8, 2)->nullable();
            $table->decimal('profit_price', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->string('status')->default('available')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();
            // SALE
            $table->boolean('is_on_sale')->default(false);
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
