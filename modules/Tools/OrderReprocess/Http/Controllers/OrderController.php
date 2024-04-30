<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Order\Models\Order;

class OrderController
{
    public function index()
    {
        $order = Order::all();
        dd($order);
    }

    public function save(Request $request)
    {
        $order = new Order();
        $order->external_order_id = $request->external_order_id;
        $order->order_status = $request->order_status;
        $order->campaign_id = $request->campaign_id;
        $order->customer_id = $request->customer_id;
        $order->email_address = $request->email_address;
        $order->ship_first_name = $request->ship_first_name;
        $order->ship_last_name = $request->ship_last_name;
        $order->ship_address_1 = $request->ship_address_1;
        $order->ship_address_2 = $request->ship_address_2;
        $order->ship_city = $request->ship_city;
        $order->ship_state = $request->ship_state;
        $order->ship_country = $request->ship_country;
        $order->ship_postal_code = $request->ship_postal_code;
        $order->pay_source = $request->pay_source;
        $order->card_type = $request->card_type;
        $order->card_last_4 = $request->card_last_4;
        $order->card_expiry_date = $request->card_expiry_date;
        $order->coupon_code = $request->coupon_code;
        $order->price = $request->price;
        $order->base_shipping = $request->base_shipping;
        $order->discount_price = $request->discount_price;
        $order->sales_tax = $request->sales_tax;
        $order->ship_profile_id = $request->ship_profile_id;
        $order->ip_address = $request->ip_address;
        $order->currency_symbol = $request->currency_symbol;
        $order->total_discount = $request->total_discount;
        $order->initial_order_id = $request->initial_order_id;
        $order->decline_reason = $request->decline_reason;
        $order->gateway_id = $request->gateway_id;
        $order->order_total = $request->order_total;
        $order->prepaid_match = $request->prepaid_match;
        $order->tracking_number = $request->tracking_number;
        $order->transaction_id = $request->transaction_id;

        $order->save();
    }
}