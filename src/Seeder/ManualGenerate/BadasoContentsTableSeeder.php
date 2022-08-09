<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoContentsTableSeeder extends Seeder
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
		\DB::beginTransaction();
		try {
			\DB::table('badaso_contents')->delete();

			\DB::table('badaso_contents')->insert(array (
                0 => 
                array (
                    'id' => 9,
                    'slug' => 'front-page',
                    'label' => 'Front Page',
                    'value' => '{"topLogo":{"name":"topLogo","label":"Top Logo","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/badasoLogo.png"},"link":{"name":"link","label":"link","type":"url","data":{"url":"/dashboard","text":"DEMO"}}}},"items":{"name":"items","label":"Items","type":"group","data":{"badasoDocumentation":{"name":"badasoDocumentation","label":"Badaso Documentation","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/badasoDocumentation.png"},"title":{"name":"title","label":"title","type":"url","data":{"url":"https:\\/\\/badaso-docs.uatech.co.id\\/","text":"Badaso Documentation"}},"description":{"name":"description","label":"description","type":"text","data":"A complete documentation about badaso."}}},"dashboard":{"name":"dashboard","label":"Dashboard","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/dashboard.png"},"title":{"name":"title","label":"title","type":"url","data":{"url":"/dashboard","text":"Dashboard"}},"description":{"name":"description","label":"description","type":"text","data":"Badaso dashboard demo for testing."}}},"postDemo":{"name":"postDemo","label":"Post Demo","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/postDemo.png"},"title":{"name":"title","label":"title","type":"url","data":{"url":"/post","text":"Post Demo"}},"description":{"name":"description","label":"description","type":"text","data":"<a style=\\"color:#3B82F6;\\" href=\\"https:\\/\\/github.com\\/uasoft-indonesia\\/badaso-post-module\\" >Post module<\\/a> demo with <a style=\\"color:#3B82F6;\\" href=\\"https:\\/\\/github.com\\/uasoft-indonesia\\/badaso-post-theme\\" >post theme<\\/a> installed."}}},"commerceDemo":{"name":"commerceDemo","label":"Commerce Demo","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/commerceDemo.png"},"title":{"name":"title","label":"title","type":"url","data":{"url":"/commerce","text":"Commerce Demo"}},"description":{"name":"description","label":"description","type":"text","data":"<a style=\\"color:#3B82F6;\\" href=\\"https:\\/\\/github.com\\/uasoft-indonesia\\/badaso-commerce-module\\">Commerce module<\\/a> demo with <a style=\\"color:#3B82F6;\\" href=\\"https:\\/\\/github.com\\/uasoft-indonesia\\/badaso-commerce-theme\\" >commerce theme<\\/a> installed."}}}}},"sponsor":{"name":"sponsor","label":"sponsor","type":"group","data":{"logo":{"name":"logo","label":"logo","type":"image","data":"photos\\/1\\/sponsor.png"},"title":{"name":"title","label":"title","type":"url","data":{"url":"https:\\/\\/opencollective.com\\/badaso","text":"Sponsor"}}}}}',
                    'created_at' => '2021-11-20 03:06:09',
                    'updated_at' => '2021-11-24 04:36:33',
                ),
                1 => 
                array (
                    'id' => 10,
                    'slug' => 'post-theme-social-media',
                    'label' => 'Post Theme Social Media',
                    'value' => '{"facebook":{"name":"facebook","label":"Facebook","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/facebook.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Facebook Logo"}}}},"twitter":{"name":"twitter","label":"Twitter","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/twitter.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Twitter Logo"}}}},"instagram":{"name":"instagram","label":"Instagram","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/instagram.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Instagram Logo"}}}},"telegram":{"name":"telegram","label":"Telegram","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/telegram.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Telegram Logo"}}}},"youtube":{"name":"youtube","label":"Youtube","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"files/shares/youtube.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"#","text":"Youtube Logo"}}}}}',
                    'created_at' => '2021-11-26 08:00:52',
                    'updated_at' => '2021-11-26 08:00:52',
                ),
            ));

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
