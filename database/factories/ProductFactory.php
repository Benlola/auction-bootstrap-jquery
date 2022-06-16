<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,//Car Category::factory()
            'merchant_id' => 2,//Seller Merchant::factory()
            'admin_id' => 0,
            'name' => $this->faker->randomElement(['Porshe', 'Audi', 'Nissan', 'Mercedes-Benz', 'Acura', 'Opel', 'Toyota']),
            'price' => random_int(10000, 500000),
            'started_at' => $this->faker->randomElement([now(), now()->addDays(random_int(1,20))]),
            'expired_at' => now()->addDays(random_int(30,50)),
            'image' => $this->faker->randomElement(['62a90aa5e227a1655245477.jpeg']),
            'short_description' => $this->faker->realText('250'),
            'long_description' => $this->faker->realText('650'),
            'specification' => [
                [
                    'name'=>'Color',
                    'value'=>$this->faker->randomElement(['Green', 'Pink', 'Black', 'White', 'Yellow'])
                ],
                [
                    'name'=>'Size',
                    'value'=>$this->faker->randomElement(['5m', '4.50m', '4.75m'])
                ],
                [
                    'name'=>'Tires size',
                    'value'=>$this->faker->randomElement(['18"', '19"', '20"', '21"'])
                ]
            ],
            'status' => 1,
        ];
    }

    public function expired()
    {
        return $this->state(function (array $attributes) {
            return [
                'started_at' => now()->addDays(random_int(-40,-21)),
                'expired_at' => now()->addDays(random_int(-20,-1)),
                'total_bid' => random_int(5,30),
            ];
        });
    }
}
