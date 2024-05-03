<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Order\Repositories\Orders;

class OrderController
{
    private $order;

    public function __construct()
    {
        $this->order = new Orders();        
    }

    public function index(): JsonResponse
    {
        try
        {
            return $this->order->getAll();
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }

    public function save(Request $request): JsonResponse
    {
        try
        {
            return $this->order->create($request->all());
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }
}