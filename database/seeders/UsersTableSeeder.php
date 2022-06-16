<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'firstname' => 'Bidder',
                'lastname' => 'Bidder',
                'username' => 'bidder',
                'email' => 'bidder@site.com',
                'country_code' => 'LK',
                'mobile' => '94+1 (584) 158-4298',
                'balance' => '0.00000000',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',//Pa$$w0rd!
                'image' => NULL,
                'address' => '{"address":"","state":"","zip":"","country":"Sri Lanka","city":""}',
                'status' => 1,
                'ev' => 1,
                'sv' => 1,
                'ver_code' => NULL,
                'ver_code_send_at' => NULL,
                'ts' => 0,
                'tv' => 1,
                'tsc' => NULL,
                'remember_token' => '6TEARWCtxNYHVxqzmQ4jmBmdRO9la7hFQYhl2QqsFr4IcwjbAsojnxOH4bgK',
                'created_at' => '2022-06-14 19:57:32',
                'updated_at' => '2022-06-14 19:57:32',
            )
        ));

    }
}
