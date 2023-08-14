<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('index', [], 'posty-theme::app');
    }
}
