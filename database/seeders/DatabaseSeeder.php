<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NavlinkSeeder::class,
            SocialLinkSeeder::class,
            HomeTitleSeeder::class,
            HomeTitle2Seeder::class,
            AboutTitleSeeder::class,
            AboutMeImageSeeder::class,
            AboutMeContentSeeder::class,
            AboutMeInfoSeeder::class,
            AboutCountSeeder::class,
            AboutSkillSeeder::class,
            AboutInterestSeeder::class,
            ResumeTitleSeeder::class,
            ResumePresentationSeeder::class,
            ResumeTitle2Seeder::class,
            ResumeInfoSeeder::class,
            ResumeEducationSeeder::class,
            ResumeProfessionalSeeder::class,
            PortfolioTitleSeeder::class,
            PortfolioFilterSeeder::class,
            PortfolioDivSeeder::class,
            ContactTitleSeeder::class,
            ContactCardSeeder::class
        ]);
    }
}
