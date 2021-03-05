<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_interests')->insert(
            [
                [
                    'divColClass' => "",
                    'iClass' => "ri-store-line",
                    'iColor' => "color: #ffbb2c;",
                    'description' => "Baking / Cooking"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-bar-chart-box-line",
                    'iColor' => "color: #5578ff;",
                    'description' => "Coding"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-calendar-todo-line",
                    'iColor' => "color: #e80368;",
                    'description' => "Organizing"
                ],
                [
                    'divColClass' => "mt-4 mt-md-0",
                    'iClass' => "ri-paint-brush-line",
                    'iColor' => "color: #e361ff;",
                    'description' => "Crafting"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-database-2-line",
                    'iColor' => "color: #47aeff;",
                    'description' => "Traveling"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-gradienter-line",
                    'iColor' => "color: #ffa76e;",
                    'description' => "Learning foreign languages"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-file-list-3-line",
                    'iColor' => "color: #11dbcf;",
                    'description' => "Reading"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-price-tag-2-line",
                    'iColor' => "color: #4233ff;",
                    'description' => "Meditation"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-anchor-line",
                    'iColor' => "color: #b2904f;",
                    'description' => "Taking walks"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-disc-line",
                    'iColor' => "color: #b20969;",
                    'description' => "Enjoying Music"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-base-station-line",
                    'iColor' => "color: #ff5828;",
                    'description' => "Asian Culture"
                ],
                [
                    'divColClass' => "mt-4",
                    'iClass' => "ri-fingerprint-line",
                    'iColor' => "color: #29cc61;",
                    'description' => "Hiking"
                ]
            ]
        );
    }
}
