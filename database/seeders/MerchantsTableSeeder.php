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
                'id' => 1,
                'firstname' => 'Shad',
                'lastname' => 'Vega',
                'username' => 'badevob',
                'mobile' => '68823452345234',
                'email' => 'vygafazej@mailinator.com',
                'email_verified_at' => NULL,
                'balance' => '170.00000000',
                'password' => '$2y$10$wIT7XDWkGNjaaBAuvfXx6ufzidp9.aojMWaG.nasB8CpBLJ3VvUHi',
                'country_code' => 'TV',
                'image' => NULL,
                'cover_image' => NULL,
                'social_links' => NULL,
                'address' => '{"address":"","state":"","zip":"","country":"Tuvalu","city":""}',
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
                'created_at' => '2022-06-14 22:06:37',
                'updated_at' => '2022-06-14 22:39:44',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Seller',
                'lastname' => 'Seller',
                'username' => 'seller',
                'mobile' => '872Ducimus sequi autem',
                'email' => 'seller@mailinator.com',
                'email_verified_at' => NULL,
                'balance' => '2000.00000000',
                'password' => '$2y$10$IvlzT93jEGRnSPDzUwGcB.u60YlKD5crX7gAfq.4VFeqkLbozsshG',
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