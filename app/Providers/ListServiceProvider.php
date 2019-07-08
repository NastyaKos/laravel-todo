<?php

namespace App\Providers;

use App\Services\ListService;
use Illuminate\Support\ServiceProvider;

class ListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ListService::class, function ($app) {
            return new ListService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
