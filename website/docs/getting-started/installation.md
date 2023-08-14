---
sidebar_position: 1
---

# Installation

1. You can install the posty theme with the following command.

    ```
    composer require skijasi/posty-theme
    ```

1. (**Optional**) Run the following command to setup the `skijasi-core`. If you never run it before.

    ```
    php artisan skijasi:setup
    ```

1. (**Optional**) Run the following command to setup the `skijasi-content`. If you never run it before.

    ```
    php artisan skijasi-content:setup
    ```

1. (**Optional**) Run the following command to setup the `skijasi-post`. If you never run it before.

    ```
    php artisan skijasi-post:setup
    ```

1. Run the following command to setup the theme

    ```
    php artisan skijasi-posty-theme:setup
    ```

1. Run the following command to migrate database.

    ```
    php artisan migrate
    ```
    
1. (**Optional**) Run the following command to generate seeder of skijasi core, content module and post module. If you never run it before.

    ```
    php artisan db:seed --class="Database\Seeders\Skijasi\SkijasiSeeder"

    php artisan db:seed --class="Database\Seeders\Skijasi\Post\SkijasiPostModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Skijasi\Content\SkijasiContentModuleSeeder"
    ```
    
1. Run the command to generate seeder of Menit theme.
    ```
    php artisan db:seed --class="Database\Seeders\Skijasi\PostyTheme\SkijasiPostyThemeSeeder"
    ```

1. (**Optional**) Run the command to generate for demo data for skijasi-menit.
    ```
    php artisan db:seed --class="Database\Seeders\Skijasi\PostyTheme\ManualGenerate\SkijasiManualGenerateSeeder"
    ```
    
1. Add the plugins to your MIX_POST_URL_PREFIX to .env.
    ```
    MIX_SKIJASI_PLUGINS=content-module,post-module,posty-theme
    ```

1. Add the plugins menu to your MIX_SKIJASI_MENU to .env. If you have another menu, include them using delimiter comma (,).
    ```
    MIX_SKIJASI_MENU=${MIX_DEFAULT_MENU},content-module,post-module,posty-theme
    ```

1. Install JS depedency
    ```
    npm install
    ```

1. Build JS dependency
    ```
    npm run watch
    ```

1. Finished. You can access the posty theme
    ```
    http://localhost:8000/posty
    ```

