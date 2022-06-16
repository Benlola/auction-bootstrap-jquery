<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SmsGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sms_gateways')->delete();
        
        
        
    }
}