<?php

use Illuminate\Database\Seeder;
use App\Styles;

class StylesTableSeeder extends Seeder
{
    public function run()
    {
        $styles = [
            'Clasico',
            'Nova Premium',
            'Rustico',
            'Alpina',
            'Tradicional',
            'Minimalista',
            'Comercial'
        ];

        foreach($styles as $st)
        {
            Styles::create([
                'name' => $st,
                'slug' => str_slug($st)
            ]);
        }
    }
}
