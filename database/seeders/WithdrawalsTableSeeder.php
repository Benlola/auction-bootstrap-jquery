<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdrawals')->delete();
        
        
        
    }
}