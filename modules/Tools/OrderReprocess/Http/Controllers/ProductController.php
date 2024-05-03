<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Product\Repositories\Products;

class ProductController
{
    private $product;

    public function __construct()
    {
        $this->product = new Products();        
    }

    public function index(): JsonResponse
    {
        try
        {
            return $this->product->getAll();
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }

    public function save(Request $request): JsonResponse
    {
        try
        {
            return $this->product->create($request->all());
        } catch (Exception $ex)
        {
            return response()->json($ex->getMessage());
        }
    }
}
