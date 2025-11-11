<?php

namespace App\Providers;


use Illuminate\Support\Facades\Event;

use Illuminate\Support\ServiceProvider;
use Stancl\Tenancy\Events\TenantCreated;
use App\Listeners\SetupTenantDatabaseListener;

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
        Event::listen(
            SetupTenantDatabaseListener::class,
        );
    }
}