<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_filters')->insert(
            [
                [
                    'data' => "*",
                    'name' => "All"
                ],
                [
                    'data' => ".filter-front",
                    'name' => "Front"
                ],
                [
                    'data' => ".filter-back",
                    'name' => "Back"
                ],
                [
                    'data' => ".filter-personal",
                    'name' => "Personal"
                ]
            ]
        );
    }
}
