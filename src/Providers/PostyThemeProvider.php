<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Nadzorservera\Skijasi\Theme\PostyTheme\Commands\PostyThemeSetup;
use Nadzorservera\Skijasi\Theme\PostyTheme\Facades\PostyTheme as FacadesPostyTheme;
use Nadzorservera\Skijasi\Theme\PostyTheme\PostyTheme;

class PostyThemeProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('PostyTheme', FacadesPostyTheme::class);

        $this->app->singleton('skijasi-posty-theme', function () {
            return new PostyTheme();
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'skijasi-posty');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posty-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->publishes([
            __DIR__.'/../Seeder'                        => database_path('seeders/Skijasi/PostyTheme'),
            __DIR__.'/../Config/skijasi-posty-theme.php' => config_path('skijasi-posty-theme.php'),
            __DIR__.'/../Images/content'                => storage_path('app/public/files/shares'),
            __DIR__.'/../Images/demo'                   => storage_path('app/public/files/shares'),
            __DIR__.'/../resources/customization/'      => resource_path('js/skijasi/theme/posty-theme/'),
        ], 'SkijasiPostyTheme');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/nadzorservera-indonesia/posty-theme'),
        ], 'SkijasiPostyThemeViews');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(PostyThemeSetup::class);
    }
}
