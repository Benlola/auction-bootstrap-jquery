<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_password_resets')->delete();
        
        
        
    }
}