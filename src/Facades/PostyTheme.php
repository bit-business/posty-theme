<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Facades;

use Illuminate\Support\Facades\Facade;

class PostyTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skijasi-posty-theme';
    }
}
