<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Farooq',
            'email' => 'farooq@gmail.com',
            'phone' => '0504830684',
            'password' => Hash::make('12345678'),
            'type' => 'admin',
        ]);

        // Create a provider user
        User::create([
            'name' => 'oracle',
            'email' => 'orale@gmail.com',
            'phone' => '0504830685',
            'password' => Hash::make('12345678'),
            'type' => 'provider',
        ]);

        // Create two regular users
        User::create([
            'name' => 'nabeel',
            'email' => 'nabeel@gmail.com',
            'phone' => '0504830686',
            'password' => Hash::make('12345678'),
            'type' => 'user',
        ]);

    }
}
