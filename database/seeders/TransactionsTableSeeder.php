<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'merchant_id' => 0,
                'amount' => '2500.00000000',
                'charge' => '0.00000000',
                'post_balance' => '2500.00000000',
                'trx_type' => '+',
                'trx' => 'W35FMHF2WX5N',
                'details' => 'Added Balance Via Admin',
                'created_at' => '2022-06-14 22:35:34',
                'updated_at' => '2022-06-14 22:35:34',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'merchant_id' => 0,
                'amount' => '170.00000000',
                'charge' => '0.00000000',
                'post_balance' => '2330.00000000',
                'trx_type' => '-',
                'trx' => 'FU38MHKR92DA',
                'details' => 'Subtracted for a new bid',
                'created_at' => '2022-06-14 22:39:44',
                'updated_at' => '2022-06-14 22:39:44',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 0,
                'merchant_id' => 1,
                'amount' => '170.00000000',
                'charge' => '0.00000000',
                'post_balance' => '170.00000000',
                'trx_type' => '+',
                'trx' => 'FU38MHKR92DA',
                'details' => '170.00 USD Added for Bid',
                'created_at' => '2022-06-14 22:39:44',
                'updated_at' => '2022-06-14 22:39:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'merchant_id' => 0,
                'amount' => '2500.00000000',
                'charge' => '10.00000000',
                'post_balance' => '4830.00000000',
                'trx_type' => '+',
                'trx' => 'E2TJ2S1HCB4K',
                'details' => 'Deposit Via Payoneer',
                'created_at' => '2022-06-15 06:51:06',
                'updated_at' => '2022-06-15 06:51:06',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'merchant_id' => 0,
                'amount' => '2000.00000000',
                'charge' => '30.00000000',
                'post_balance' => '6830.00000000',
                'trx_type' => '+',
                'trx' => '8QWHHDW1Q4MP',
                'details' => 'Deposit Via Bank Wire',
                'created_at' => '2022-06-15 07:45:56',
                'updated_at' => '2022-06-15 07:45:56',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'merchant_id' => 0,
                'amount' => '2000.00000000',
                'charge' => '0.00000000',
                'post_balance' => '4830.00000000',
                'trx_type' => '-',
                'trx' => '9D15YA8B4Q83',
                'details' => 'Subtracted for a new bid',
                'created_at' => '2022-06-15 08:31:15',
                'updated_at' => '2022-06-15 08:31:15',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 0,
                'merchant_id' => 2,
                'amount' => '2000.00000000',
                'charge' => '0.00000000',
                'post_balance' => '2000.00000000',
                'trx_type' => '+',
                'trx' => '9D15YA8B4Q83',
                'details' => '2,000.00 USD Added for Bid',
                'created_at' => '2022-06-15 08:31:15',
                'updated_at' => '2022-06-15 08:31:15',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'merchant_id' => 0,
                'amount' => '50000.00000000',
                'charge' => '10.00000000',
                'post_balance' => '50000.00000000',
                'trx_type' => '+',
                'trx' => 'Y7TRWKTOB1GB',
                'details' => 'Deposit Via Payoneer',
                'created_at' => '2022-06-15 09:27:45',
                'updated_at' => '2022-06-15 09:27:45',
            ),
        ));
        
        
    }
}