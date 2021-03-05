<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_links')->insert(
            [
                [
                    'href' => "https://twitter.com/",
                    'aClass' => "twitter",
                    'iClass' => "icofont-twitter"
                ],
                [
                    'href' => "https://www.facebook.com/",
                    'aClass' => "facebook",
                    'iClass' => "icofont-facebook"
                ],
                [
                    'href' => "https://www.instagram.com/",
                    'aClass' => "instagram",
                    'iClass' => "icofont-instagram"
                ],
                [
                    'href' => "https://myaccount.google.com/intro/profile",
                    'aClass' => "google-plus",
                    'iClass' => "icofont-skype"
                ],
                [
                    'href' => "http://www.linkedin.com/in/theodora-ergun-872753152",
                    'aClass' => "linkedin",
                    'iClass' => "icofont-linkedin"
                ]
            ]
        );
    }
}
