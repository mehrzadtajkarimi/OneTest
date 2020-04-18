<?php

use Illuminate\Support\Facades\Route;



if (!function_exists('is_active')) {

    function is_active($routeName, $activeClassName = 'active')
    {
        if (is_array($routeName)) {
            return  in_array(Route::currentRouteName(), $routeName) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $routeName ? $activeClassName : '';
    }
}