<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Setup view composers to send categories to header view
        \View::composer('layouts.header', function ($view) {
            $view->with('categories', Category::all());
        });
        // Setup view composers to send categories to header view
        \View::composer('layouts.footer', function ($view) {
            $view->with('categories', Category::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
