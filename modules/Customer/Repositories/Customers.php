<?php

namespace Modules\Customer\Repositories;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use Modules\Customer\Models\Customer;

class Customers
{
    private $returnResponse;

    public function __construct()
    {
        $this->returnResponse = Config::get('customer.DefaultReturnValues');
    }

    public function getAll(): JsonResponse
    {
        try
        {
            $customer = Customer::all();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Customers fetch successfully.";
            $this->returnResponse['data'] = $customer;

            return response()->json($this->returnResponse);

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
            $customer = new Customer();
            $customer->first_name = $payload['first_name'];
            $customer->last_name = $payload['last_name'];
            $customer->email_address = $payload['email'];

            $customer->save();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Customer saved successfully.";
            $this->returnResponse['data'] = $customer;

            return response()->json($this->returnResponse);

        } catch (Exception $ex)
        {
            $this->returnResponse['message'] = $ex->getMessage();

            return response()->json($this->returnResponse);
        }
    }
}