<?php

namespace Modules\Tools;

use Illuminate\Support\ServiceProvider;

class ToolsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Customer/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../Order/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../Product/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../Customer/config.php', 'customer');
        
        $this->app->register(RouteServiceProvider::class);
    }
}