<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HOME',
                'slug' => 'home',
                'tempname' => 'templates.basic.',
                'secs' => '["categories","live_auction","upcoming_auction","recently_expired","quick_banner","winner","counter","how_to_bid","testimonial","blog","faq","sponsors"]',
                'is_default' => 1,
                'created_at' => '2020-07-11 09:23:58',
                'updated_at' => '2022-02-28 07:53:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'About',
                'slug' => 'about-us',
                'tempname' => 'templates.basic.',
                'secs' => '["counter","winner","how_to_bid","testimonial","sponsors"]',
                'is_default' => 0,
                'created_at' => '2020-07-11 09:35:35',
                'updated_at' => '2022-02-24 07:46:15',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Blog',
                'slug' => 'blog',
                'tempname' => 'templates.basic.',
                'secs' => NULL,
                'is_default' => 1,
                'created_at' => '2020-10-22 04:14:43',
                'updated_at' => '2022-03-07 13:03:50',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Contact',
                'slug' => 'contact',
                'tempname' => 'templates.basic.',
                'secs' => '["faq"]',
                'is_default' => 1,
                'created_at' => '2020-10-22 04:14:53',
                'updated_at' => '2022-03-07 13:04:08',
            ),
        ));
        
        
    }
}