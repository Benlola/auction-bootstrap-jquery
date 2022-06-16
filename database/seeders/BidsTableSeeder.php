<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BidsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bids')->delete();
        
        \DB::table('bids')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'user_id' => 3,
                'amount' => '170.00000000',
                'created_at' => '2022-06-14 22:39:44',
                'updated_at' => '2022-06-14 22:39:44',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'user_id' => 3,
                'amount' => '2000.00000000',
                'created_at' => '2022-06-15 08:31:14',
                'updated_at' => '2022-06-15 08:31:14',
            ),
        ));
        
        
    }
}