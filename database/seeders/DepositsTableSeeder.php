<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepositsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deposits')->delete();
        
        \DB::table('deposits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'method_code' => 1000,
                'amount' => '2500.00000000',
                'method_currency' => 'USD',
                'charge' => '10.00000000',
                'rate' => '1.00000000',
                'final_amo' => '2510.00000000',
                'detail' => '{"send_from_email":{"field_name":"vasea@dasd.ds","type":"text"},"screenshot":{"field_name":"2022\\/06\\/15\\/62a981224e6a01655275810.jpg","type":"file"}}',
                'btc_amo' => '0',
                'btc_wallet' => '',
                'trx' => 'E2TJ2S1HCB4K',
                'try' => 0,
                'status' => 1,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2022-06-15 06:46:47',
                'updated_at' => '2022-06-15 06:51:06',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'method_code' => 101,
                'amount' => '2000.00000000',
                'method_currency' => 'USD',
                'charge' => '0.00000000',
                'rate' => '1.00000000',
                'final_amo' => '2000.00000000',
                'detail' => NULL,
                'btc_amo' => '0',
                'btc_wallet' => '',
                'trx' => '6ZCGP8D32KXK',
                'try' => 0,
                'status' => 0,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2022-06-15 07:44:04',
                'updated_at' => '2022-06-15 07:44:04',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'method_code' => 1001,
                'amount' => '2000.00000000',
                'method_currency' => 'USD',
                'charge' => '30.00000000',
                'rate' => '1.00000000',
                'final_amo' => '2030.00000000',
                'detail' => '{"transaction_number":{"field_name":"23523465325654","type":"text"},"screenshot":{"field_name":"2022\\/06\\/15\\/62a98e1ab2d6c1655279130.jpeg","type":"file"}}',
                'btc_amo' => '0',
                'btc_wallet' => '',
                'trx' => '8QWHHDW1Q4MP',
                'try' => 0,
                'status' => 1,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2022-06-15 07:45:08',
                'updated_at' => '2022-06-15 07:45:56',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'method_code' => 1000,
                'amount' => '50000.00000000',
                'method_currency' => 'USD',
                'charge' => '10.00000000',
                'rate' => '1.00000000',
                'final_amo' => '50010.00000000',
                'detail' => '{"send_from_email":{"field_name":"senduser@demo.com","type":"text"},"screenshot":{"field_name":"2022\\/06\\/15\\/62a9a5ff3f0f91655285247.png","type":"file"}}',
                'btc_amo' => '0',
                'btc_wallet' => '',
                'trx' => 'Y7TRWKTOB1GB',
                'try' => 0,
                'status' => 1,
                'from_api' => 0,
                'admin_feedback' => NULL,
                'created_at' => '2022-06-15 09:27:01',
                'updated_at' => '2022-06-15 09:27:45',
            ),
        ));
        
        
    }
}