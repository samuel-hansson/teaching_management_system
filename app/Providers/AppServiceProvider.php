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
    public function register()
    {
        $this->app->bind('example2',function(){
            $foo = config('services.foo');
            return new \App\ExampleTwo($foo);
        });


        $this->app->singleton('App\Example',function (){
            return new \App\Example('test');
        });
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
