<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchantPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('merchant_password_resets')->delete();
        
        
        
    }
}