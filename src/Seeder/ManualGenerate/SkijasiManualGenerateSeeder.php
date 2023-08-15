<?php

namespace Database\Seeders\Skijasi\PostyTheme\ManualGenerate;

use Illuminate\Database\Seeder;
use Nadzorservera\Skijasi\Traits\Seedable;

class SkijasiManualGenerateSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeds/Skijasi/PostyTheme/ManualGenerate/';

    public function run()
    {
        $this->seed(SkijasiCategoriesTableSeeder::class);
        $this->seed(SkijasiTagsTableSeeder::class);
        $this->seed(SkijasiPostsTableSeeder::class);
        $this->seed(SkijasiPostTagTableSeeder::class);
        $this->seed(SkijasiContentsTableSeeder::class);
    }
}
