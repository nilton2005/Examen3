<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $this->app->bind('ConnectController', 'App\Http\Controllers\ConnectController');
        $this->app->bind('Form', 'Illuminate\Support\Facades\Form');


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
