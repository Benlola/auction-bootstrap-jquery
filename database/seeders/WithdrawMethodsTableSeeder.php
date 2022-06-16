<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdraw_methods')->delete();
        
        \DB::table('withdraw_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mobile Money',
                'image' => '62a9961d081f91655281181.jpeg',
                'min_limit' => '10.00000000',
                'max_limit' => '1000.00000000',
                'delay' => '1-2 Hours',
                'fixed_charge' => '0.00000000',
                'rate' => '1.00000000',
                'percent_charge' => '0.01',
                'currency' => 'USD',
                'user_data' => '{"enter_your_mobile_number":{"field_name":"enter_your_mobile_number","field_level":"Enter your mobile number","type":"text","validation":"required"}}',
            'description' => '<span style="color: rgb(33, 37, 41);">Enter your mobile number</span><br>',
                'status' => 1,
                'created_at' => '2022-06-15 08:17:51',
                'updated_at' => '2022-06-15 08:19:42',
            ),
        ));
        
        
    }
}