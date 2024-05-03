<?php

namespace Modules\Order\Repositories;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use Modules\Order\Models\Order;

class Orders
{
    private $returnResponse;

    public function __construct()
    {
        $this->returnResponse = Config::get('order.DefaultReturnValues');    
    }
    
    public function getAll(): JsonResponse
    {
        try
        {
            $order = Order::all();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Orders fetch successfully.";
            $this->returnResponse['data'] = $order;
            
            return response()->json();
        } catch (Exception $ex)
        {
            $this->returnResponse['message'] = $ex->getMessage();

            return response()->json($this->returnResponse);
        }
    }

    public function create(array $payload): JsonResponse
    {
        try
        {
            $order = new Order();
            $order->external_order_id = $payload['external_order_id'];
            $order->order_status = $payload['order_status'];
            $order->campaign_id = $payload['campaign_id'];
            $order->customer_id = $payload['customer_id'];
            $order->email_address = $payload['email_address'];
            $order->ship_first_name = $payload['ship_first_name'];
            $order->ship_last_name = $payload['ship_last_name'];
            $order->ship_address_1 = $payload['ship_address_1'];
            $order->ship_address_2 = $payload['ship_address_2'];
            $order->ship_city = $payload['ship_city'];
            $order->ship_state = $payload['ship_state'];
            $order->ship_country = $payload['ship_country'];
            $order->ship_postal_code = $payload['ship_postal_code'];
            $order->pay_source = $payload['pay_source'];
            $order->card_type = $payload['card_type'];
            $order->card_last_4 = $payload['card_last_4'];
            $order->card_expiry_date = $payload['card_expiry_date'];
            $order->coupon_code = $payload['coupon_code'];
            $order->price = $payload['price'];
            $order->base_shipping = $payload['base_shipping'];
            $order->discount_price = $payload['discount_price'];
            $order->sales_tax = $payload['sales_tax'];
            $order->ship_profile_id = $payload['ship_profile_id'];
            $order->ip_address = $payload['ip_address'];
            $order->currency_symbol = $payload['currency_symbol'];
            $order->total_discount = $payload['total_discount'];
            $order->initial_order_id = $payload['initial_order_id'];
            $order->decline_reason = $payload['decline_reason'];
            $order->gateway_id = $payload['gateway_id'];
            $order->order_total = $payload['order_total'];
            $order->prepaid_match = $payload['prepaid_match'];
            $order->tracking_number = $payload['tracking_number'];
            $order->transaction_id = $payload['transaction_id'];

            $order->save();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Order saved successfully.";
            $this->returnResponse['data'] = $order;

            return response()->json($this->returnResponse);

        } catch (Exception $ex)
        {
            $this->returnResponse['message'] = $ex->getMessage();

            return response()->json($this->returnResponse);
        }
    }
}