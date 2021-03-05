<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_counts')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "icofont-simple-smile",
                    'number' => 6,
                    'description' => "Months Of Experience"
                ],
                [
                    'divColClass' => "mt-5 mt-md-0",
                    'iClass' => "icofont-document-folder",
                    'number' => 20,
                    'description' => "Projects Ended"
                ],
                [
                    'divColClass' => "mt-5 mt-lg-0 p-0",
                    'iClass' => "icofont-live-support",
                    'number' => 30,
                    'description' => "Average Coding Hours/Week"
                ],
                [
                    'divColClass' => "mt-5 mt-lg-0",
                    'iClass' => "icofont-users-alt-5",
                    'number' => 3,
                    'description' => "Languages Learned"
                ]
            ]
        );
    }
}
