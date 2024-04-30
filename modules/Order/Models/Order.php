<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'external_order_id',
        'order_status',
        'campaign_id',
        'customer_id',
        'email_address',
        'ship_first_name',
        'ship_last_name',
        'ship_address_1',
        'ship_address_2',
        'ship_city',
        'ship_state',
        'ship_country',
        'ship_postal_code',
        'pay_source',
        'card_type',
        'card_last_4',
        'card_expiry_date',
        'coupon_code',
        'price',
        'base_shipping',
        'discount_price',
        'sales_tax',
        'ship_profile_id',
        'ip_address',
        'currency_symbol',
        'total_discount',
        'initial_order_id',
        'decline_reason',
        'gateway_id',
        'order_total',
        'prepaid_match',
        'tracking_number',
        'transaction_id'
    ];
}