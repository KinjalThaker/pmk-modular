<?php

namespace Modules\Tools;

use Illuminate\Support\Facades\Route;
use Modules\Tools\OrderReProcess\Http\Controllers\CustomerController;
use Modules\Tools\OrderReProcess\Http\Controllers\OrderController;

Route::prefix('customer')->group(function(){
    Route::get('/', [CustomerController::class, 'index']);
    Route::post('post', [CustomerController::class, 'save']);
});

Route::prefix('order')->group(function(){
    Route::get('/', [OrderController::class, 'index']);
    Route::post('post', [OrderController::class, 'save']);
});

Route::prefix('product')->group(function(){
    Route::get('/', [OrderController::class, 'index']);
    Route::post('post', [OrderController::class, 'save']);
});