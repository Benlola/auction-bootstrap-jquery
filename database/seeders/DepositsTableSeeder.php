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
                'user_id' => 1,
                'method_code' => 1000,
                'amount' => '2500.00000000',
                'method_currency' => 'USD',
                'charge' => '10.00000000',
                'rate' => '1.00000000',
                'final_amo' => '2510.00000000',
                'detail' => '{"send_from_email":{"field_name":"bidder@site.com","type":"text"},"screenshot":{"field_name":"2022\\/06\\/15\\/62a981224e6a01655275810.jpg","type":"file"}}',
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
        ));


    }
}
