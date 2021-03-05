<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_skills')->insert(
            [
                [
                    'skill' => "HTML",
                    'iValue' => "90%",
                    'ariaValue' => 90
                ],
                [
                    'skill' => "CSS/SASS/Bootstrap",
                    'iValue' => "85%",
                    'ariaValue' => 85
                ],
                [
                    'skill' => "JavaScript",
                    'iValue' => "75%",
                    'ariaValue' => 75
                ],
                [
                    'skill' => "React",
                    'iValue' => "60%",
                    'ariaValue' => 60
                ],
                [
                    'skill' => "Laravel",
                    'iValue' => "70%",
                    'ariaValue' => 70
                ],
                [
                    'skill' => "MySql",
                    'iValue' => "65%",
                    'ariaValue' => 65
                ],
                [
                    'skill' => "GitHub",
                    'iValue' => "85%",
                    'ariaValue' => 85
                ],
                [
                    'skill' => "Chrome Inspector",
                    'iValue' => "90%",
                    'ariaValue' => 90
                ]
            ]
        );
    }
}
