<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_titles')->insert(
            [
                [
                    'title' => "Contact",
                    'para' => "Contact Me"
                ]
            ]
        );
    }
}
