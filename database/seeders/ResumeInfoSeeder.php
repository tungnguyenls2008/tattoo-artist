<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_infos')->insert(
            [
                [
                    'info' => "Berchem-Sainte-Agathe, 1082 Brussels"
                ],
                [
                    'info' => "(32) 471 24 36"
                ],
                [
                    'info' => "theodora.ergun@hotmail.com"
                ]
            ]
        );
    }
}
