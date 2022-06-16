<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cars',
                'icon' => '<i class="las la-car-side"></i>',
                'status' => 1,
                'created_at' => '2022-06-14 22:11:12',
                'updated_at' => '2022-06-14 22:11:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jewelry',
                'icon' => '<i class="las la-crown"></i>',
                'status' => 1,
                'created_at' => '2022-06-14 22:13:22',
                'updated_at' => '2022-06-14 22:13:22',
            ),
        ));
        
        
    }
}