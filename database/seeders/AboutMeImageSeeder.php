<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutMeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_me_images')->insert(
            [
                [
                    'src' => "img/TidBW.jpg",
                    'alt' => "picture of me"
                ]
            ]
        );
    }
}
