<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GatewayCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gateway_currencies')->delete();
        
        \DB::table('gateway_currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Payoneer',
                'currency' => 'USD',
                'symbol' => '',
                'method_code' => 1000,
                'gateway_alias' => 'payoneer',
                'min_amount' => '1.00000000',
                'max_amount' => '1000000.00000000',
                'percent_charge' => '0.00',
                'fixed_charge' => '10.00000000',
                'rate' => '1.00000000',
                'image' => '62a97f036a9cd1655275267.jpeg',
                'gateway_parameter' => '{"send_from_email":{"field_name":"send_from_email","field_level":"Send From Email","type":"text","validation":"required"},"screenshot":{"field_name":"screenshot","field_level":"Screenshot","type":"file","validation":"required"}}',
                'created_at' => '2022-06-15 06:41:07',
                'updated_at' => '2022-06-15 06:47:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bank Wire',
                'currency' => 'USD',
                'symbol' => '',
                'method_code' => 1001,
                'gateway_alias' => 'bank_wire',
                'min_amount' => '10.00000000',
                'max_amount' => '100000.00000000',
                'percent_charge' => '1.00',
                'fixed_charge' => '10.00000000',
                'rate' => '1.00000000',
                'image' => '62a97f85c54bd1655275397.jpeg',
                'gateway_parameter' => '{"transaction_number":{"field_name":"transaction_number","field_level":"Transaction Number","type":"text","validation":"required"},"screenshot":{"field_name":"screenshot","field_level":"Screenshot","type":"file","validation":"required"}}',
                'created_at' => '2022-06-15 06:43:18',
                'updated_at' => '2022-06-15 06:43:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mobile Money',
                'currency' => 'USD',
                'symbol' => '',
                'method_code' => 1002,
                'gateway_alias' => 'mobile_money',
                'min_amount' => '10.00000000',
                'max_amount' => '100000.00000000',
                'percent_charge' => '0.85',
                'fixed_charge' => '0.00000000',
                'rate' => '1.00000000',
                'image' => '62a9800441c621655275524.jpeg',
                'gateway_parameter' => '{"send_from_number":{"field_name":"send_from_number","field_level":"Send From Number","type":"text","validation":"required"},"transaction_number":{"field_name":"transaction_number","field_level":"Transaction Number","type":"text","validation":"required"},"screenshot":{"field_name":"screenshot","field_level":"Screenshot","type":"file","validation":"required"}}',
                'created_at' => '2022-06-15 06:45:24',
                'updated_at' => '2022-06-15 06:45:24',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Paypal USD',
                'currency' => 'USD',
                'symbol' => '$',
                'method_code' => 101,
                'gateway_alias' => 'Paypal',
                'min_amount' => '10.00000000',
                'max_amount' => '100000.00000000',
                'percent_charge' => '0.00',
                'fixed_charge' => '0.00000000',
                'rate' => '1.00000000',
                'image' => '62a98b6de23761655278445.jpeg',
                'gateway_parameter' => '{"paypal_email":"sb-owud61543012@business.example.com"}',
                'created_at' => '2022-06-15 07:34:06',
                'updated_at' => '2022-06-15 07:34:06',
            ),
        ));
        
        
    }
}