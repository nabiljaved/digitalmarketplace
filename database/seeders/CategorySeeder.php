<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/categories_data.json');
        $categories = json_decode($json, true);

        $now = Carbon::now();

        foreach ($categories as $category) {
            $category['created_at'] = $now;
            $category['updated_at'] = $now;
            DB::table('categories')->insert($category);
        }
    }
}
