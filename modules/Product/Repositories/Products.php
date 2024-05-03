<?php

namespace Modules\Product\Repositories;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use Modules\Product\Models\Product;

class Products
{
    private $returnResponse;

    public function __construct()
    {
        $this->returnResponse = Config::get('product.DefaultReturnValues');
    }

    public function getAll(): JsonResponse
    {
        try
        {
            $product = Product::all();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Products fetch successfully.";
            $this->returnResponse['data'] = $product;

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
            $product = new Product();
            $product->name = $payload['name'];
            $product->code = $payload['code'];
            $product->sku = $payload['sku'];
            $product->description = $payload['description'];
            $product->is_digital = $payload['is_digital'];
            $product->price = $payload['price'];
            $product->weight = $payload['weight'];
            $product->msrp = $payload['msrp'];
            $product->stock_qty = $payload['stock_qty'];

            $product->save();

            $this->returnResponse['error'] = false;
            $this->returnResponse['message'] = "Product saved successfully.";
            $this->returnResponse['data'] = $product;

            return response()->json($this->returnResponse);

        } catch (Exception $ex)
        {
            $this->returnResponse['message'] = $ex->getMessage();

            return response()->json($this->returnResponse);
        }
    }
}