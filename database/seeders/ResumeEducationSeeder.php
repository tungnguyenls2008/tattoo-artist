<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_education')->insert(
            [
                [
                    'title' => "Full Stack Web Developer",
                    'date' => "September 2020 - April 2021",
                    'institution' => "Coding School | MolenGeek",
                    'description' => "Training of 6 intensive months to become a Full stack Web Developer"
                ],
                [
                    'title' => "Bachelor Management Assistant",
                    'date' => "2017 - 2020",
                    'institution' => "Haute Ecole Galilée ECSEDI-ISALT, Bruxelles",
                    'description' => "Bachelor in Management Assistant, option languages and management"
                ]
            ]
        );
    }
}
