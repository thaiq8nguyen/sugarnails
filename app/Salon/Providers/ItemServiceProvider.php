<?php

namespace Salon\Providers;

use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        return $this->app->bind('Salon\Contracts\ItemInterface', 'Salon\Repositories\ItemRepository');

    }
}
