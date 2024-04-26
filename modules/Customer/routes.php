<?php

use Modules\Customer\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('customer-get', [CustomerController::class, 'index']);