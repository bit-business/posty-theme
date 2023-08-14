<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Controllers;

use Inertia\Inertia;

class TagController extends Controller
{
    public function __invoke($slug)
    {
        return Inertia::render('tag', ['slug' => $slug], 'posty-theme::app');
    }
}
