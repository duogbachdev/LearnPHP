<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Duogbach\Duogbach;

class DuogbachServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton("duogbach", function () {
            return new Duogbach();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
