<?php

namespace Database\Factories;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MerchantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Merchant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            'firstname' => $this->faker->firstNameMale(),
            'lastname' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'country_code' => 'LK',
            'mobile' => '94+1 (584) 158-4298',
            'balance' => '9999999.00000000',
            'password' => bcrypt('password'),//Pa$$w0rd!
            'image' => NULL,
            'address' => '{"address":"","state":"","zip":"","country":"Sri Lanka","city":""}',
            'status' => 1,
            'ev' => 1,
            'sv' => 1,
            'ver_code' => NULL,
            'ver_code_send_at' => NULL,
            'ts' => 0,
            'tv' => 1,
            'tsc' => NULL,
            //'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified(): Factory {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Generate Bidder users counted.
     *
     * @param $count
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function merchants($count): Factory {
        return $this->state(function (array $attributes) use($count) {
            return [
                'firstname' => 'Seller',
                'lastname' => 'Seller'.$count,
                'username' => 'seller'.$count,
                'email' => 'seller'.$count.'@site.com',
                'password' => '$2y$10$vFbiXJaIWQCEFI9Bvr5LI.LI.y2b9bjYqR2cvilelednsjHzxpreu',//Pa$$w0rd!
            ];
        });
    }
}
