<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Module\Post\Models\Category;

class BadasoCategoriesTableSeeder extends Seeder
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
			$categories = array (
                0 => 
                array (
                    'id' => 1,
                    'parent_id' => NULL,
                    'title' => 'Politics',
                    'meta_title' => NULL,
                    'slug' => 'politics',
                    'content' => NULL,
                ),
                1 => 
                array (
                    'id' => 3,
                    'parent_id' => NULL,
                    'title' => 'Finance',
                    'meta_title' => NULL,
                    'slug' => 'finance',
                    'content' => NULL,
                ),
                2 => 
                array (
                    'id' => 4,
                    'parent_id' => NULL,
                    'title' => 'Health',
                    'meta_title' => NULL,
                    'slug' => 'health',
                    'content' => NULL,
                ),
                3 => 
                array (
                    'id' => 5,
                    'parent_id' => NULL,
                    'title' => 'Lifestyle',
                    'meta_title' => NULL,
                    'slug' => 'lifestyle',
                    'content' => NULL,
                ),
                4 => 
                array (
                    'id' => 6,
                    'parent_id' => NULL,
                    'title' => 'Programming',
                    'meta_title' => NULL,
                    'slug' => 'programming',
                    'content' => NULL,
                ),
                5 => 
                array (
                    'id' => 7,
                    'parent_id' => NULL,
                    'title' => 'Tips & Tricks',
                    'meta_title' => NULL,
                    'slug' => 'tips-tricks',
                    'content' => NULL,
                ),
            );

            foreach ($categories as $key => $category) {
                $is_exists = Category::where('slug', $category['slug'])->first();
                if (is_null($is_exists)) {
                    Category::create($category);
                }
            }

			DB::commit();
		} catch(Exception $e) {
			DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
