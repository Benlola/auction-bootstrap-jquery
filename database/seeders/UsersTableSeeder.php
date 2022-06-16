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
                'id' => 1,
                'firstname' => 'Imogene',
                'lastname' => 'West',
                'username' => 'dohynosuqy',
                'email' => 'dohynosuqy@mailinator.com',
                'country_code' => 'LK',
            'mobile' => '94+1 (584) 158-4298',
                'balance' => '0.00000000',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',
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
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Johny',
                'lastname' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@mailinator.com',
                'country_code' => 'LK',
            'mobile' => '94+1 (584) 158-4298',
                'balance' => '0.00000000',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',
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
                'remember_token' => NULL,
                'created_at' => '2022-06-14 19:57:32',
                'updated_at' => '2022-06-14 19:57:32',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Vincent',
                'lastname' => 'Tate',
                'username' => 'naguhe',
                'email' => 'kobex@mailinator.com',
                'country_code' => 'AN',
            'mobile' => '599+1 (785) 531-2903',
                'balance' => '4830.00000000',
                'password' => '$2y$10$ngXb33DXQE6EECFebfRDEen44j332nDoRrghqiY1uR8rJdy.XKW1m',
                'image' => NULL,
                'address' => '{"address":"","state":"","zip":"","country":"Netherlands Antilles","city":""}',
                'status' => 1,
                'ev' => 1,
                'sv' => 1,
                'ver_code' => NULL,
                'ver_code_send_at' => NULL,
                'ts' => 0,
                'tv' => 1,
                'tsc' => NULL,
                'remember_token' => '1sRfUex753Czser8mAQ9AxSH3i02K6dYIeW69qXl8tPEEjKgD6TSHV1ODGCh',
                'created_at' => '2022-06-14 22:26:49',
                'updated_at' => '2022-06-15 08:31:14',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'safari',
                'lastname' => 'user',
                'username' => 'safariuser',
                'email' => 'savariuser@demo.com',
                'country_code' => 'RO',
                'mobile' => '4012345678',
                'balance' => '50000.00000000',
                'password' => '$2y$10$MqZ6ogckBf34AusIbSCGAe4gtpfLckuOiONboIOWsQXoDseVf4iVO',
                'image' => NULL,
                'address' => '{"address":"","state":"","zip":"","country":"Romania","city":""}',
                'status' => 1,
                'ev' => 1,
                'sv' => 1,
                'ver_code' => NULL,
                'ver_code_send_at' => NULL,
                'ts' => 0,
                'tv' => 1,
                'tsc' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-15 09:26:42',
                'updated_at' => '2022-06-15 09:27:45',
            ),
        ));
        
        
    }
}