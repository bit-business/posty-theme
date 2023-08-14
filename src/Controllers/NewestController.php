<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Controllers;

use Inertia\Inertia;

class NewestController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('newest', [], 'posty-theme::app');
    }
}
