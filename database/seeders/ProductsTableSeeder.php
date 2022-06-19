<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'merchant_id' => 1,
                'admin_id' => 1,
                'name' => 'Porshe Cayene',
                'price' => '150.00000000',
                'total_bid' => 1,
                'started_at' => '2022-06-14 22:26:07',
                'expired_at' => '2022-08-31 00:00:00',
                'avg_rating' => '5.00',
                'total_rating' => 5,
                'review_count' => 1,
                'image' => '62a90aa5e227a1655245477.jpeg',
                'short_description' => 'Sapiente consectetur odit consequatur hic omnis a perferendis ad quisquam sunt, quibusdam mollitia, cum ducimus accusant...',
                'long_description' => '<div class="description-item" style="margin-bottom: 35px;"><h6 class="title" style="margin-top: 10px; line-height: 26px; margin-bottom: 16px !important;">Commodi dolores, inventore assumenda!</h6><p style="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni veritatis ad temporibus atque adipisci nisi rerum amet vitae, provident animi dicta quidem quo consequuntur sequi sit, in numquam tempora!<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nemo officiis aliquam autem laborum pariatur, maiores, hic assumenda quae enim repellat error a, placeat ullam possimus esse perspiciatis perferendis ipsum.</p></div><div class="description-item" style="margin-bottom: 35px;"><h6 class="title" style="margin-top: 10px; line-height: 26px; margin-bottom: 16px !important;">Commodi dolores, inventore assumenda!</h6><pre><p></p><pre><p></p><p></p><pre><p></p><ul><li style="list-style: none; padding: 0px; margin-bottom: 7px;">&nbsp;Amet consectetur adipisicing elit. Maxime reprehenderit quaerat, velit rem atque vel impedit!</li></ul><ul><li style="list-style: none; padding: 0px; margin-bottom: 7px;">&nbsp;Vel asperiores mollitia id maiores dignissimos ipsum officia at quo cumque, consectetur, excepturi deleniti!</li></ul><ul><li style="list-style: none; padding: 0px;">&nbsp;Amet consectetur adipisicing elit. Maxime reprehenderit quaerat, velit rem atque vel impedit!</li></ul><p></p></pre><p></p><p></p></pre><p></p></pre></div><div class="description-item" style="margin-bottom: 35px;"><h6 class="title" style="margin-top: 10px; line-height: 26px; margin-bottom: 16px !important;">Commodi dolores, inventore assumenda!</h6><pre><p></p><ul><li style="list-style: none; padding: 0px; margin-bottom: 7px;">&nbsp;Amet consectetur adipisicing elit. Maxime reprehenderit quaerat, velit rem atque vel impedit!</li></ul><ul><li style="list-style: none; padding: 0px; margin-bottom: 7px;">&nbsp;Vel asperiores mollitia id maiores dignissimos ipsum officia at quo cumque, consectetur, excepturi deleniti!</li></ul><ul><li style="list-style: none; padding: 0px;">&nbsp;Amet consectetur adipisicing elit. Maxime reprehenderit quaerat, velit rem atque vel impedit!</li></ul><p></p></pre></div><div class="description-item" style=""><h6 class="title" style="margin-top: 10px; line-height: 26px; margin-bottom: 16px !important;">Commodi dolores, inventore assumenda!</h6><p style="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni veritatis ad temporibus atque adipisci nisi rerum amet vitae, provident animi dicta quidem quo consequuntur sequi sit, in numquam tempora!<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nemo officiis aliquam autem laborum pariatur, maiores, hic assumenda quae enim repellat error a, placeat ullam possimus esse perspiciatis perferendis ipsum.</p></div>',
                'specification' => '{"1":{"name":"Brand","value":"Porshe"},"2":{"name":"Color","value":"Black"}}',
                'status' => 1,
                'created_at' => '2022-06-14 22:24:39',
                'updated_at' => '2022-06-14 22:40:48',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'merchant_id' => 2,
                'admin_id' => 0,
                'name' => 'Porshe',
                'price' => '10.00000000',
                'total_bid' => 1,
                'started_at' => '2022-06-15 00:00:00',
                'expired_at' => '2022-06-17 00:00:00',
                'avg_rating' => '0.00',
                'total_rating' => 0,
                'review_count' => 0,
                'image' => '62a99889972e91655281801.jpeg',
                'short_description' => 't',
                'long_description' => 'qwreterwawertqw',
                'specification' => NULL,
                'status' => 1,
                'created_at' => '2022-06-15 08:30:02',
                'updated_at' => '2022-06-15 21:19:05',
            ),
        ));
        
        
    }
}