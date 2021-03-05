<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_titles')->insert(
            [
                [
                    'name' => "Theodora Ergun",
                    'href' => "/"
                ]
            ]
        );
    }
}
