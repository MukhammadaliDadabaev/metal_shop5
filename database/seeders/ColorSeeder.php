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
            'title' => 'C29142',
            'slug' => 'Blue'
        ]);
    }
}
