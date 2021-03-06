<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * since FJR 2020.01.03
         * added per https:/laravel-news.com/laravel-5-4-key-too-long-error
         * to correct problem with Maria db max length
         *
         * edit includes adding: use Illuminate\Support\Facades\Schema;
         */
        Schema::defaultStringLength(191);
    }
}
