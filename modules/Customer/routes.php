<?php

use Modules\Customer\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function(){
    Route::get('/', [CustomerController::class, 'index']);
    Route::post('post', [CustomerController::class, 'save']);
});