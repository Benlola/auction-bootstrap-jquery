<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserLoginsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_logins')->delete();
        
        \DB::table('user_logins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-14 19:57:32',
                'updated_at' => '2022-06-14 19:57:32',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-14 21:59:26',
                'updated_at' => '2022-06-14 21:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 0,
                'merchant_id' => 1,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-14 22:06:37',
                'updated_at' => '2022-06-14 22:06:37',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 0,
                'merchant_id' => 1,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-14 22:21:45',
                'updated_at' => '2022-06-14 22:21:45',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-14 22:26:49',
                'updated_at' => '2022-06-14 22:26:49',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-15 06:26:02',
                'updated_at' => '2022-06-15 06:26:02',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 0,
                'merchant_id' => 2,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-15 08:22:51',
                'updated_at' => '2022-06-15 08:22:51',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 3,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-15 08:24:42',
                'updated_at' => '2022-06-15 08:24:42',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 4,
                'merchant_id' => 0,
                'user_ip' => '::1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Safari',
                'os' => 'Mac OS X',
                'created_at' => '2022-06-15 09:26:42',
                'updated_at' => '2022-06-15 09:26:42',
            ),
        ));
        
        
    }
}