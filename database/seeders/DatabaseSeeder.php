<?php

namespace Database\Seeders;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\UserSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CategorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);
    }
}
