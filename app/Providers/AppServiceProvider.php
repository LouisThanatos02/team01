<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
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
        //
        Schema::defaultStringLength(191);

        Validator::extend('numchack',function ($attribute,$value,$parameters,$validator)
        {
            $date_compare = \Arr::get($validator->getData(),$parameters[0]);
            if($date_compare == 1)
                return strlen($value) == 8;
            elseif($date_compare == 2)
                return strlen($value) == 8;
            elseif($date_compare == 3)
                return strlen($value) == 8;
            elseif($date_compare == 4)
                return strlen($value) == 7;
            elseif($date_compare == 5)
                return strlen($value) == 6;
            elseif($date_compare == 6)
                return strlen($value) == 5;
            elseif($date_compare == 7)
                return strlen($value) == 4;
            elseif($date_compare == 8)
                return strlen($value) == 3;
            elseif($date_compare == 9)
                return strlen($value) == 3;
        });

    }
}
