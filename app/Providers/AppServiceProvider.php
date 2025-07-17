<?php

namespace App\Providers;

use App\View\Components\Frontend\DistributionThumbnail;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('distribution-thumbnail', DistributionThumbnail::class);

        View::composer('layouts.app', \App\View\Composers\DistributionComposer::class);
    }
}
