<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rating' => 5,
                'description' => NULL,
                'user_id' => 3,
                'product_id' => 1,
                'merchant_id' => 0,
                'created_at' => '2022-06-14 22:40:30',
                'updated_at' => '2022-06-14 22:40:30',
            ),
        ));
        
        
    }
}