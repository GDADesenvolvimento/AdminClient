<?php

namespace GdaDesenv\AdminClient\Providers;

use Illuminate\Support\ServiceProvider;

class GdaClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }
        $this->loadViewsFrom(__DIR__ . "/../../resources/views","AdminClient");
        $this->publishes([
            __DIR__."/../../database/migrations" => database_path("migrations")
        ],"migrations");
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}