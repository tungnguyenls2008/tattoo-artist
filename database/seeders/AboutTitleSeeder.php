<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_titles')->insert(
            [
                [
                    'title' => "About",
                    'para' => "Learn more about me"
                ],
                [
                    'title' => "Skills",
                    'para' => ""
                ],
                [
                    'title' => "Interests",
                    'para' => ""
                ]
            ]
        );
    }
}
