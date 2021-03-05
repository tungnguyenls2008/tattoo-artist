<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_me_infos')->insert(
            [
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Birthday:",
                    'text' => "24 November 1997"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "GitHub:",
                    'text' => "https://github.com/TheodoraE"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Phone:",
                    'text' => "+32 471 24 36 33"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "City:",
                    'text' => "Brussels, Belgium"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Age:",
                    'text' => "23"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Degree:",
                    'text' => "Bachelor"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Email",
                    'text' => "theodora.ergun@hotmail.com"
                ],
                [
                    'icon' => "icofont-rounded-right",
                    'title' => "Freelance",
                    'text' => "Available"
                ]
            ]
        );
    }
}
