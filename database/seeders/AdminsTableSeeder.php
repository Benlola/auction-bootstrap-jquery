<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Super Admin2',
                'email' => 'admin2@site.com',
                'username' => 'admin2',
                'email_verified_at' => NULL,
                'image' => '62a908888212d1655244936.png',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',
                'created_at' => NULL,
                'updated_at' => '2022-06-14 22:15:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Super Admin2',
                'email' => 'admin2@site.com',
                'username' => 'admin2',
                'email_verified_at' => NULL,
                'image' => '62a908888212d1655244936.png',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',
                'created_at' => NULL,
                'updated_at' => '2022-06-14 22:15:37',
            ),
        ));
        
        
    }
}