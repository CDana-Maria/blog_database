<?php

namespace App\Providers;

use App\Services\DummyRequestLogger;
use App\Services\PathRequestLogger;
use App\Services\RequestLoggerInterface;
use App\Services\DetailsRequestLogger;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(RequestLoggerInterface::class, function () {
        //     return new DummyRequestLogger($this->app->make(LoggerInterface::class));

        // });           
         $this->app->bind(RequestLoggerInterface::class, PathRequestLogger::class);
         $this->app->bind(RequestLoggerInterface::class, DetailsRequestLogger::class);
         // $this->register(RepsitorySeviceProvider::class);
         // $this->app->bind(\App\Contracts\OrderContract::class, App\Repositories\ClassImplementingOrderContract::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
