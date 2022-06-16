<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'text_align' => 0,
                'is_default' => 1,
                'is_rtl' => 0,
                'created_at' => '2022-06-15 11:32:38',
                'updated_at' => '2022-06-15 11:32:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hebrew',
                'code' => 'he',
                'text_align' => 0,
                'is_default' => 0,
                'is_rtl' => 1,
                'created_at' => '2022-06-15 11:32:50',
                'updated_at' => '2022-06-15 11:43:04',
            ),
        ));
        
        
    }
}