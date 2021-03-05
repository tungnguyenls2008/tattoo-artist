<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navlinks')->insert(
            [
                [
                    'href' => "#header",
                    'name' => "Home"
                ],
                [
                    'href' => "#about",
                    'name' => "About"
                ],
                [
                    'href' => "#resume",
                    'name' => "Resume"
                ],
                [
                    'href' => "#portfolio",
                    'name' => "Portfolio"
                ],
                [
                    'href' => "#contact",
                    'name' => "Contact"
                ],
                [
                    'href' => "/backoffice",
                    'name' => "Backoffice"
                ]
            ]
        );
    }
}
