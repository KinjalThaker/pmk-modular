<?php

namespace Modules\Tools\OrderReProcess\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class ProductController
{
    public function index()
    {
        $product = Product::all();
        dd($product);
    }

    public function save(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->is_digital = $request->is_digital;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->msrp = $request->msrp;
        $product->stock_qty = $request->stock_qty;

        $product->save();
    }
}
