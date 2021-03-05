<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitle2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_title2s')->insert(
            [
                [
                    'description1' => "I'm a enthousiast",
                    'descriptionPost' => "junior web developer",
                    'description2' => "from Brussels",
                ]
            ]
        );
    }
}
