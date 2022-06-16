<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_notifications')->delete();
        
        \DB::table('admin_notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'merchant_id' => 0,
                'title' => 'New member registered',
                'read_status' => 1,
                'click_url' => '/admin/user/detail/1',
                'created_at' => '2022-06-14 19:57:32',
                'updated_at' => '2022-06-14 22:37:27',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 0,
                'merchant_id' => 1,
                'title' => 'New merchant registered',
                'read_status' => 1,
                'click_url' => '/admin/merchant/detail/1',
                'created_at' => '2022-06-14 22:06:37',
                'updated_at' => '2022-06-14 22:37:26',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'merchant_id' => 0,
                'title' => 'New member registered',
                'read_status' => 1,
                'click_url' => '/admin/user/detail/3',
                'created_at' => '2022-06-14 22:26:49',
                'updated_at' => '2022-06-14 22:37:24',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'merchant_id' => 0,
                'title' => 'Deposit request from naguhe',
                'read_status' => 0,
                'click_url' => '/admin/deposit/details/1',
                'created_at' => '2022-06-15 06:50:10',
                'updated_at' => '2022-06-15 06:50:10',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'merchant_id' => 0,
                'title' => 'Deposit request from naguhe',
                'read_status' => 0,
                'click_url' => '/admin/deposit/details/3',
                'created_at' => '2022-06-15 07:45:30',
                'updated_at' => '2022-06-15 07:45:30',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 0,
                'merchant_id' => 2,
                'title' => 'New merchant registered',
                'read_status' => 0,
                'click_url' => '/admin/merchant/detail/2',
                'created_at' => '2022-06-15 08:22:51',
                'updated_at' => '2022-06-15 08:22:51',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'merchant_id' => 0,
                'title' => 'New member registered',
                'read_status' => 0,
                'click_url' => '/admin/user/detail/4',
                'created_at' => '2022-06-15 09:26:42',
                'updated_at' => '2022-06-15 09:26:42',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'merchant_id' => 0,
                'title' => 'Deposit request from safariuser',
                'read_status' => 0,
                'click_url' => '/admin/deposit/details/4',
                'created_at' => '2022-06-15 09:27:27',
                'updated_at' => '2022-06-15 09:27:27',
            ),
        ));
        
        
    }
}