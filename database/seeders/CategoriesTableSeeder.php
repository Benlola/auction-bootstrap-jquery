<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $insert_data = ['Cars', 'Jewelry'];
        foreach ($insert_data as $name) {
            Category::create([
                'name'           => $name,
                'icon'           => sprintf('<i class="las %s"></i>', $name == 'Cars' ? 'la-car-side' : 'la-crown'),
                'status'         => 1,
                'media_category' => $name == 'Cars' ? ['Interior', 'Exterior'] : null,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),

            ]);
        }
    }
}