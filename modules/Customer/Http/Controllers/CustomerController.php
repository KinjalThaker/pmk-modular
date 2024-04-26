<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Customer\Http\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::factory()->count(10)->create();
        dd($customer);
    }
}
