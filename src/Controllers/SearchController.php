<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Controllers;

use Inertia\Inertia;

class SearchController extends Controller
{
    public function __invoke($search = null)
    {
        return Inertia::render('search', ['search' => $search], 'posty-theme::app');
    }
}
