<?php

namespace Database\Seeders\Badaso\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Module\Post\Models\Tag;

class BadasoTagsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            $tags = (array(
                0 =>
                array(
                    'id' => 1,
                    'title' => 'Programming',
                    'meta_title' => NULL,
                    'slug' => 'programming',
                    'content' => NULL,
                ),
                1 =>
                array(
                    'id' => 2,
                    'title' => 'Machine Learning',
                    'meta_title' => NULL,
                    'slug' => 'machine-learning',
                    'content' => NULL,
                ),
                2 =>
                array(
                    'id' => 3,
                    'title' => 'System Design',
                    'meta_title' => NULL,
                    'slug' => 'system-design',
                    'content' => NULL,
                ),
                3 =>
                array(
                    'id' => 4,
                    'title' => 'Interview',
                    'meta_title' => NULL,
                    'slug' => 'interview',
                    'content' => NULL,
                ),
                4 =>
                array(
                    'id' => 5,
                    'title' => 'Software Development',
                    'meta_title' => NULL,
                    'slug' => 'software-development',
                    'content' => NULL,
                ),
                5 =>
                array(
                    'id' => 6,
                    'title' => 'Hacker',
                    'meta_title' => NULL,
                    'slug' => 'hacker',
                    'content' => NULL,
                ),
                6 =>
                array(
                    'id' => 7,
                    'title' => 'Travel',
                    'meta_title' => NULL,
                    'slug' => 'travel',
                    'content' => NULL,
                ),
            ));

            foreach ($tags as $key => $tag) {
                Tag::create($tag);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
