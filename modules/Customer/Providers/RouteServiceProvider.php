<?php

namespace Modules\Customer\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function(){
            /*Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));*/

            Route::middleware('web')
                ->group(__DIR__ . '/../routes.php');
        });
    }
}