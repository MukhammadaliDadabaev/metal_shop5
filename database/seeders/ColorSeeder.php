<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'title' => '040404',
             'slug' => 'Black'
        ]);
        Color::create([
            'title' => 'A67F21',
            'slug' => 'Orange'
        ]);
        Color::create([
            'title' => 'FFFF00',
            'slug' => 'Yellow'
        ]);
        Color::create([
            'title' => 'FF0000',
            'slug' => 'Red'
        ]);
        Color::create([
            'title' => '008000',
            'slug' => 'Green'
        ]);
        Color::create([
            'title' => '808000',
            'slug' => 'Olive'
        ]);
        Color::create([
            'title' => '00FF00',
            'slug' => 'Lime'
        ]);
        Color::create([
            'title' => 'FFC0CB',
            'slug' => 'Pink'
        ]);
        Color::create([
            'title' => '00FFFF',
            'slug' => 'Cyan'
        ]);
        Color::create([
            'title' => 'FF00FF',
            'slug' => 'Magenta'
        ]);
        Color::create([
            'title' => 'F69C63',
            'slug' => 'Warning'
        ]);
        Color::create([
            'title' => '0000FF',
            'slug' => 'Blue'
        ]);
        Color::create([
            'title' => '251a6b',
            'slug' => 'Success'
        ]);
        Color::create([
            'title' => 'd3d33f',
            'slug' => 'Info'
        ]);
    }
}









