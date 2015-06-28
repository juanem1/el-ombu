<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Products;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 40) as $index)
        {
            Products::create([
                'title' => $faker->sentence,
                'subTitle' => $faker->sentence,
                'shortDescription' => $faker->text(140),
                'longDescription' => $faker->text(500),
                'price' => $faker->randomNumber(5),
                'gallery_id' => $faker->numberBetween(1, 17)
            ]);
        }
    }
}
