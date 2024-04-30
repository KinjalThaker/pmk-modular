<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Customer\Models\Customer;

class CustomerController
{
    public function index()
    {
        $customer = Customer::all();
        dd($customer);
    }

    public function save(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email;

        $customer->save();
    }
}
