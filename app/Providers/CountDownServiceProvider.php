<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use App\Services\LaravelCountDown\CountDown;

class CountDownServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('product.countdown', function ($app) {
            $carbon = new Carbon;
            $timezone = $app->config->get('app.timezone');

            return new CountDown($timezone, $carbon);
        });

        $this->app->alias('product.countdown', CountDown::class);
    }
}
