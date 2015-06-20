<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Images;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 200) as $z) {
            Images::create([
                'gallery_id' => $faker->numberBetween(1, 50),
                'name' => '/images/1.jpg'
            ]);
        }
    }
}
