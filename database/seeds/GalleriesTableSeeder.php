<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Gallery;

class GalleriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            $title = $faker->sentence;
            Gallery::create([
                'title' => $title,
                'slug' => str_slug($title),
                'description' => $faker->text(500)
            ]);
        }
    }
}
