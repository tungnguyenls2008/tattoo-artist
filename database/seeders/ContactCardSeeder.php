<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_cards')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "bx bx-map",
                    'title' => "My Address",
                    'description' => "Berchem-Sainte-Agathe, 1082 Brussels"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "bx bx-share-alt",
                    'title' => "Social Profiles",
                    'description' => ""
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "bx bx-envelope",
                    'title' => "Email Me",
                    'description' => "theodora.ergun@hotmail.com"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "bx bx-phone-call",
                    'title' => "Call Me",
                    'description' => "+32 471 24 36 33"
                ]
            ]
        );
    }
}
