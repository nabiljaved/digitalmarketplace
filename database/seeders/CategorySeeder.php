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
        DB::table('services')->delete();

        $json = file_get_contents(__DIR__ . '/services_data.json');
        $services = json_decode($json, true);

        $now = Carbon::now();
        $id = 1;

        foreach ($services as $service) {
            $service['id'] = $id;
            $service['created_at'] = $now;
            $service['updated_at'] = $now;

            // Ensure that the number of placeholders matches the number of values
            $placeholders = array_fill(0, count($service), '?');

            DB::table('services')->insert($service);
            $id++;
        }
        
    }
}
