<?php

namespace Nadzorservera\Skijasi\Theme\PostTyheme\Helpers;

class CaseConvert
{
    public static function slugToCapitalize($string)
    {
        $modified_string = str_replace('-', ' ', $string);

        return ucwords($modified_string);
    }
}
