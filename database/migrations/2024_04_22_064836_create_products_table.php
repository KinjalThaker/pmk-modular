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
            $table->integer('product_id', 11)->primary();
            $table->string('name', 100);
            $table->string('code', 100);
            $table->string('sku', 100);
            $table->text('description')->nullable();
            $table->boolean('is_digital', 1)->default(0);
            $table->double('price', 10, 2);
            $table->integer('weight', 11);
            $table->string('msrp', 100)->nullable();
            $table->integer('stock_qty', 11);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
