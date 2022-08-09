---
sidebar_position: 1
---

# Installation

1. You can install the posty theme with the following command.

    ```
    composer require badaso/posty-theme
    ```

1. (**Optional**) Run the following command to setup the `badaso-core`. If you never run it before.

    ```
    php artisan badaso:setup
    ```

1. (**Optional**) Run the following command to setup the `badaso-content`. If you never run it before.

    ```
    php artisan badaso-content:setup
    ```

1. (**Optional**) Run the following command to setup the `badaso-post`. If you never run it before.

    ```
    php artisan badaso-post:setup
    ```

1. Run the following command to setup the theme

    ```
    php artisan badaso-posty-theme:setup
    ```

1. Run the following command to migrate database.

    ```
    php artisan migrate
    ```
    
1. (**Optional**) Run the following command to generate seeder of badaso core, content module and post module. If you never run it before.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Post\BadasoPostModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
    ```
    
1. Run the command to generate seeder of Menit theme.
    ```
    php artisan db:seed --class="Database\Seeders\Badaso\PostyTheme\BadasoPostyThemeSeeder"
    ```

1. (**Optional**) Run the command to generate for demo data for badaso-menit.
    ```
    php artisan db:seed --class="Database\Seeders\Badaso\PostyTheme\ManualGenerate\BadasoManualGenerateSeeder"
    ```
    
1. Add the plugins to your MIX_POST_URL_PREFIX to .env.
    ```
    MIX_BADASO_PLUGINS=content-module,post-module,posty-theme
    ```

1. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,posty-theme
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

