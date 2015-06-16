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
            $title = $faker->sentence;
            Offers::create([
                'title' => $title,
                'slug' => str_slug($title),
                'price' => $faker->randomNumber(5),
                'product_id' => $faker->numberBetween(1, 40),
            ]);
        }
    }
}
