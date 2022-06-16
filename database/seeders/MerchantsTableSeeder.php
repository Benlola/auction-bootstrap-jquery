<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('merchants')->delete();

        \DB::table('merchants')->insert(array (
            0 =>
            array (
                'firstname' => 'Seller',
                'lastname' => 'Seller',
                'username' => 'seller',
                'mobile' => '94+1 (584) 158-4298',
                'email' => 'seller@site.com',
                'email_verified_at' => NULL,
                'balance' => '2000.00000000',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',//Pa$$w0rd!
                'country_code' => 'PN',
                'image' => NULL,
                'cover_image' => NULL,
                'social_links' => NULL,
                'address' => '{"address":"","state":"","zip":"","country":"Pitcairn","city":""}',
                'avg_rating' => '0.00',
                'total_rating' => 0,
                'review_count' => 0,
                'status' => 1,
                'ev' => 1,
                'sv' => 1,
                'ver_code' => NULL,
                'ver_code_send_at' => '0000-00-00 00:00:00',
                'ts' => 0,
                'tv' => 1,
                'tsc' => NULL,
                'created_at' => '2022-06-15 08:22:51',
                'updated_at' => '2022-06-15 08:31:15',
            ),
        ));

    }
}
