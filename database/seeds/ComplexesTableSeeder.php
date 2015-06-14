<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Complex;

class ComplexesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $complex = ['Zafiro', 'Onix', 'Esmeralda', 'Rubí', 'Cornalina'];

        foreach($complex as $comp)
        {
            $title = $faker->sentence;
            Complex::create([
                'title' => $comp,
                'slug' => str_slug($comp),
                'description' => $faker->text(500),
                'price' => $faker->randomNumber(5),
                'gallery_id' => $faker->numberBetween(1, 50)
            ]);
        }
    }
}
