<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WinnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('winners')->delete();
        
        
        
    }
}