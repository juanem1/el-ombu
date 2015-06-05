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
                'description' => $faker->text(500),
                'gallery_id' => $faker->numberBetween(1, 50)
            ]);
        }
    }
}
