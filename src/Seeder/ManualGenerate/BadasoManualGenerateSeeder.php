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

    protected $seedersPath = 'database/seeds/Badaso/ManualGenerate/';

    public function run()
    {
        $this->call(RacksTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(BorrowingTableSeeder::class);
        $this->call(ReturnTableSeeder::class);

        PostTag::whereNotNull('id')->delete();
        Post::whereNotNull('id')->delete();
        Comment::whereNotNull('id')->delete();
        Tag::whereNotNull('id')->delete();
        Category::whereNotNull('id')->delete();

        $this->seed(BadasoCategoriesTableSeeder::class);
        $this->seed(BadasoTagsTableSeeder::class);
        $this->seed(BadasoPostsTableSeeder::class);
        $this->seed(BadasoPostTagTableSeeder::class);
        $this->seed(BadasoContentsTableSeeder::class);
    }
}
