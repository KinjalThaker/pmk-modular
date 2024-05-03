<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Customer\Repositories\Customers;

class CustomerController
{
    private $customer;

    public function __construct()
    {
        $this->customer = new Customers();        
    }

    public function index(): JsonResponse
    {
        try
        {
            return $this->customer->getAll();
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }

    public function save(Request $request): JsonResponse
    {
        try
        {
            return $this->customer->create($request->all());
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }
}
