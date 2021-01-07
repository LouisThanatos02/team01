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

        Validator::extend('numChack',function ($attribute,$value,$parameters,$validator)
        {
            $date_compare = \Arr::get($validator->getData(),$parameters[0]);
            if($value == 1)
                return strlen($date_compare) == 8;
            elseif($value == 2)
                return strlen($date_compare) == 8;
            elseif($value == 3)
                return strlen($date_compare) == 8;
            elseif($value == 4)
                return strlen($date_compare) == 7;
            elseif($value == 5)
                return strlen($date_compare) == 6;
            elseif($value == 6)
                return strlen($date_compare) == 5;
            elseif($value == 7)
                return strlen($date_compare) == 4;
            elseif($value == 8)
                return strlen($date_compare) == 3;
            elseif($value == 9)
                return strlen($date_compare) == 3;
        });

        Validator::replacer('numChack', function ($message, $attribute, $rule, $parameters) {
            if($)
            return str_replace($message);
        });
    }
}
