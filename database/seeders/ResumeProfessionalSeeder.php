<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_professionals')->insert(
            [
                [
                    'title' => "Resourcer Intern",
                    'date' => "February 2020 - May 2020",
                    'institution' => "Modis Belgium – Modis IT & Engineering, Grand-Bigard",
                    'task1' => "Search of the different IT profiles and the redaction of IT
                    basics documentation",
                    'task2' => "Search of specific candidates according to client’s criteria
                    on many platforms (websites and databases) and the
                    correspondence by phone and by mail",
                    'task3' => "Search of companies in need of candidates and the creation
                    of a list for the Business Manager",
                    'task4' => "Creating candidates’ profiles in Modis’ database and
                    creating companies accounts in Adecco’s database
                    (Salesforce)",
                    'task5' => "Updating my Excel file containing all the researches’ results
                    (clients, contacts and job offer)",
                    'task6' => ""
                ],
                [
                    'title' => "Administration Intern",
                    'date' => "May 2018",
                    'institution' => "AWEX – Directorate for Financial Incentives, Brussels",
                    'task1' => "Assistance in controlling incoming files",
                    'task2' => "File analysis, mail writing",
                    'task3' => "Excel database updating, mail archiving, graphics creation and getting the tasks done by following the database.",
                    'task4' => "Online currency searches",
                    'task5' => "",
                    'task6' => ""
                ]
            ]
        );
    }
}
