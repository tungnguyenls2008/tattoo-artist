<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumePresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_presentations')->insert(
            [
                [
                    'name' => "Theodora Ergun",
                    'text' => "Young problem solver oriented Web Developer eager to learn and create fun websites / JavaScript Games."
                ]
            ]
        );
    }
}
