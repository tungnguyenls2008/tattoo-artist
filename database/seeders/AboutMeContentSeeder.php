<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_me_contents')->insert(
            [
                [
                    'title' => "Junior FullStack Web developer",
                    'description' => "Young problem solver oriented Web Developer eager to learn and create fun websites / JavaScript Games",
                    'text' => "Freshly graduated Management Assistant, I decided to challenge myself and learn programming. I have found myself found of coding and especially of JavaScript. On my free time, I develop games, calculators and potential effective apps. My qualities are JavaScript and Laravel. I code on Ubuntu environment."
                ]
            ]
        );
    }
}
