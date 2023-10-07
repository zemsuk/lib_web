<?php

namespace Zems\LibWeb;

use Illuminate\Support\ServiceProvider;

class LibWebProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
        $this->app->singleton(LibWebController::class, function(){
            return new LibWebController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
        // dd("Hi from Zems Package");
    }
}
