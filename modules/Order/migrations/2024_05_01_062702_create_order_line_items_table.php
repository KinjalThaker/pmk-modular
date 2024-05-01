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
        Schema::create('order_line_items', function (Blueprint $table) {
            $table->integer('item_id', 11)->primary();
            $table->integer('order_id', 11)->index();
            $table->integer('product_id', 11)->index();
            $table->string('sku', 100)->nullable();
            $table->string('name', 255);
            $table->integer('qty', 11);
            $table->double('shipping', 10, 2)->nullable();
            $table->double('price', 10, 2);
            $table->boolean('on_hold', 1)->default(0);
            $table->boolean('is_recurring', 1)->default(0);
            $table->integer('subscription_id', 11);
            $table->string('next_subscription_product', 100)->nullable();
            $table->integer('next_subscription_product_id', 11);
            $table->double('next_subscription_product_price', 10, 2)->nullable();
            $table->boolean('is_add_on', 1)->default(0);
            $table->boolean('is_in_trial', 1)->default(0);
            $table->string('subscription_type', 100)->nullable();
            $table->string('subscription_desc', 100)->nullable();
            $table->text('prepaid')->nullable();
            $table->text('billing_model')->nullable();
            $table->text('offer')->nullable();
            $table->integer('purchase_id', 11);
            $table->string('purchase_status', 100)->nullable();
            $table->string('detailed_status', 100)->nullable();
            $table->date('next_bill_date');
            $table->integer('order_item_id', 11);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_line_items');
    }
};
