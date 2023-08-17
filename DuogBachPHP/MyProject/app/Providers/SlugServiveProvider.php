<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Slug\Slug;

class SlugServiveProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton("slug", function () {
            return new Slug();
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
