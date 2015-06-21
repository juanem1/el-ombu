<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Gallery;

class GalleriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $galleries = [
            'Casas',
            'Cabañas',
            'Interiores',
            'Obradores y módulos habitacionales',
            'Construcción',
            'Materiales',
            'La fábrica'
        ];

        // Main galleries
        foreach($galleries as $gal)
        {
            Gallery::create([
                'title' => $gal,
                'slug' => str_slug($gal),
                'description' => $faker->text(500)
            ]);
        }

        // Extra gelleries
        foreach(range(1, 10) as $index)
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
