<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade


class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                "testimony" => "Digital Market Service has been instrumental in boosting our online presence...",
                "name" => "David Johnson",
                "designation" => "CEO",
                "imgurl" => "david.jpg"
            ],
            [
                "testimony" => "We have been working with Digital Market Service for over a year now, and the results have been exceptional...",
                "name" => "Sarah batool",
                "designation" => "Marketing Manager",
                "imgurl" => "sarah.jpg"
            ],
            [
                "testimony" => "I was struggling to reach my target audience until I found Digital Market Service...",
                "name" => "Michael Carter",
                "designation" => "Small Business Owner",
                "imgurl" => "michael.jpg"
            ],
            [
                "testimony" => "Digital Market Service is an exceptional digital marketing agency...",
                "name" => "Emily Martinez",
                "designation" => "Founder",
                "imgurl" => "emily.jpg"
            ],
            [
                "testimony" => "Choosing Digital Market Service was the best decision we made for our company...",
                "name" => "John Lewis",
                "designation" => "Digital Marketing Manager",
                "imgurl" => "lewis.jpg"
            ],
        ];
          

        DB::table('testimonials')->insert($testimonials);
    }
}
