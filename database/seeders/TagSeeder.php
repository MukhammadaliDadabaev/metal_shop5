<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'title' => 'Avtomobillar 1',
            'slug' => 'Auto'
        ]);
        Tag::create([
            'title' => 'Valyutalar 2',
            'slug' => 'Money'
        ]);
        Tag::create([
            'title' => 'Ekskiluziplar 3',
            'slug' => 'Class'
        ]);
    }
}
