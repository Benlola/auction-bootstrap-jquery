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
                'name' => 'Super Admin',
                'email' => 'admin@site.com',
                'username' => 'admin',
                'email_verified_at' => NULL,
                'image' => '62a908888212d1655244936.png',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',//Pa$$w0rd!
                'created_at' => NULL,
                'updated_at' => '2022-06-14 22:15:37',
            )
        ));

        $user = \App\Models\Admin::find(1);
        $user->roles()->attach(\App\Models\Role::find(1)->id);
    }
}
