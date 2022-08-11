<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Module\Post\Models\Category;
use Uasoft\Badaso\Module\Post\Models\Comment;
use Uasoft\Badaso\Module\Post\Models\Post;
use Uasoft\Badaso\Module\Post\Models\PostTag;
use Uasoft\Badaso\Module\Post\Models\Tag;
use Uasoft\Badaso\Traits\Seedable;

class BadasoManualGenerateSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeds/Badaso/PostyTheme/ManualGenerate/';

    public function run()
    {
        $this->seed(BadasoCategoriesTableSeeder::class);
        $this->seed(BadasoTagsTableSeeder::class);
        $this->seed(BadasoPostsTableSeeder::class);
        $this->seed(BadasoPostTagTableSeeder::class);
        $this->seed(BadasoContentsTableSeeder::class);
    }
}
