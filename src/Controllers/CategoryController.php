<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Controllers;

use Inertia\Inertia;

class CategoryController extends Controller
{
    public function __invoke($slug)
    {
        return Inertia::render('category', ['slug' => $slug], 'posty-theme::app');
    }
}
