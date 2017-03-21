<?php


    function isActiveRoute($route, $output = 'active')
    {
       if(strpos(Route::currentRouteName(),$route) === 0){
           return $output;
       }
//        if (Route::currentRouteName() == $route) {
//            return $output;
//        }
    }
