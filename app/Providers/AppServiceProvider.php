<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

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
        Request::macro('isAdmin', function () {
            return $this->segment(1) == 'admin';
         });
    }
}
