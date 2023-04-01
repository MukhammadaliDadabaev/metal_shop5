<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'metal_shop5_ru@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Manager',
            'email' => 'metal_shop1_ru@manage.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Customer',
            'email' => 'metal_shop2_ru@custom.com',
            'password' => Hash::make('password'),
        ]);
    }
}
