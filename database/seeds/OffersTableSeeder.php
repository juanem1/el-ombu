<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Offers;

class OffersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            Offers::create([
                'title' => $faker->sentence,
                'shortDescription' => $faker->text(140),
                'longDescription' => $faker->text(500),
                'price' => $faker->randomNumber(5),
                'gallery_id' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
