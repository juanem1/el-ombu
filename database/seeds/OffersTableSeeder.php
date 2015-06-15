<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Offers;

class OffersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 40) as $index)
        {
            Offers::create([
                'title' => $faker->sentence,
                'price' => $faker->randomNumber(5),
                'product_id' => $faker->numberBetween(1, 40),
            ]);
        }
    }
}
