<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Complex;

class ComplexesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 5) as $index)
        {
            $title = $faker->sentence;
            Complex::create([
                'title' => $title,
                'slug' => str_slug($title),
                'description' => $faker->text(500),
                'price' => $faker->randomNumber(5),
                'gallery_id' => $faker->numberBetween(1, 50)
            ]);
        }
    }
}
