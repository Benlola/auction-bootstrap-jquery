<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
                array (
                    'name' => 'Administrator',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'name' => 'Merchant',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            2 =>
                array (
                    'name' => 'Bidder',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));
    }
}
