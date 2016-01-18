<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // check if file exists in the file manager
        Validator::extend('file_exists', function($attribute, $value, $parameters = [''], $validator) {
            return file_exists($parameters[0] . '/' . $value);
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
