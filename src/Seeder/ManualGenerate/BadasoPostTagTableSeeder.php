<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Module\Post\Models\PostTag;

class BadasoPostTagTableSeeder extends Seeder
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
            $post_tags = (array(
                0 =>
                array(
                    'post_id' => 1,
                    'tag_id' => 1,
                ),
                1 =>
                array(
                    'post_id' => 1,
                    'tag_id' => 2,
                ),
                2 =>
                array(
                    'post_id' => 1,
                    'tag_id' => 4,
                ),
                3 =>
                array(
                    'post_id' => 1,
                    'tag_id' => 3,
                ),
                4 =>
                array(
                    'post_id' => 1,
                    'tag_id' => 5,
                ),
                5 =>
                array(
                    'post_id' => 2,
                    'tag_id' => 1,
                ),
                6 =>
                array(
                    'post_id' => 2,
                    'tag_id' => 5,
                ),
                7 =>
                array(
                    'post_id' => 3,
                    'tag_id' => 1,
                ),
                8 =>
                array(
                    'post_id' => 3,
                    'tag_id' => 2,
                ),
                9 =>
                array(
                    'post_id' => 3,
                    'tag_id' => 5,
                ),
                10 =>
                array(
                    'post_id' => 4,
                    'tag_id' => 4,
                ),
                11 =>
                array(
                    'post_id' => 5,
                    'tag_id' => 7,
                ),
                12 =>
                array(
                    'post_id' => 7,
                    'tag_id' => 4,
                ),
                13 =>
                array(
                    'post_id' => 9,
                    'tag_id' => 5,
                ),
                14 =>
                array(
                    'post_id' => 9,
                    'tag_id' => 1,
                ),
                15 =>
                array(
                    'post_id' => 9,
                    'tag_id' => 2,
                ),
            ));

            foreach ($post_tags as $key => $post_tag) {
                PostTag::insert($post_tag);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
