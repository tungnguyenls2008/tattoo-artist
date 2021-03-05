<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeTitle2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_title2s')->insert(
            [
                [
                    'title' => "Sumary"
                ],
                [
                    'title' => "Education"
                ],
                [
                    'title' => "Professional Experience"
                ]
            ]
        );
    }
}
