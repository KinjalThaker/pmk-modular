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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id', 11)->primary();
            $table->integer('external_order_id', 11)->index();
            $table->string('order_status', 100)->nullable();
            $table->integer('campaign_id', 11);
            $table->foreignId('customer_id', 11)->index();
            $table->string('email_address', 100);
            $table->string('ship_first_name', 100);
            $table->string('ship_last_name', 100);
            $table->text('ship_address_1');
            $table->text('ship_address_2');
            $table->string('ship_city', 100);
            $table->string('ship_state', 100);
            $table->string('ship_country', 100);
            $table->integer('ship_postal_code', 11);
            $table->string('pay_source', 100);
            $table->string('card_type', 100);
            $table->integer('card_last_4', 4);
            $table->timestamp('card_expiry_date');
            $table->string('coupon_code', 100)->nullable();
            $table->double('price', 10, 2);
            $table->double('base_shipping', 10, 2);
            $table->double('discount_price', 10, 2);
            $table->double('sales_tax', 10, 2);
            $table->integer('ship_profile_id', 11);
            $table->string('ip_address', 100)->nullable();
            $table->string('currency_symbol', 10);
            $table->double('total_discount', 10, 2);
            $table->integer('initial_order_id', 11);
            $table->text('decline_reason')->nullable();
            $table->integer('gateway_id', 11);
            $table->double('order_total', 10, 2);
            $table->boolean('prepaid_match', 1)->default(0);
            $table->string('tracking_number', 100)->nullable();
            $table->integer('transaction_id', 11);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
