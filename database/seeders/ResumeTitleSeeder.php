<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_titles')->insert(
            [
                [
                    'title' => "Resume",
                    'para' => "Check My Resume"
                ]
            ]
        );
    }
}
