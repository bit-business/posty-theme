<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Helpers;

class Route
{
    public static function getController($key)
    {
        // get config 'controllers' from config/skijasi-posty-theme.php
        $controllers = config('skijasi-posty-theme.controllers');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'Nadzorservera\\Skijasi\\Theme\\PostyTheme\\Controllers\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }
}
