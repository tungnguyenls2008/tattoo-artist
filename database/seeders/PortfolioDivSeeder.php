<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_divs')->insert(
            [
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/1caminar.png",
                    'title' => "Caminar",
                    'description' => "Website",
                    'a1Title' => "Caminar",
                    'a2href' => "https://theodorae.github.io/caminar/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/2youCommunik2.png",
                    'title' => "YouCommunik",
                    'description' => "Website",
                    'a1Title' => "YouCommunik",
                    'a2href' => "https://theodorae.github.io/youCommunik2/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/3YouCommunik3.png",
                    'title' => "YouCommunik 2",
                    'description' => "Website",
                    'a1Title' => "YouCommunik 2",
                    'a2href' => "https://theodorae.github.io/YouCommunik3/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/4sartCSS.png",
                    'title' => "StartCSS",
                    'description' => "Website",
                    'a1Title' => "StartCSS",
                    'a2href' => "https://theodorae.github.io/startCSS/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/6siteDuChef.png",
                    'title' => "Site du Chef",
                    'description' => "Website",
                    'a1Title' => "Site du Chef",
                    'a2href' => "https://theodorae.github.io/site_du_chef/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/8spatial.png",
                    'title' => "Spatial",
                    'description' => "Website",
                    'a1Title' => "Spatial",
                    'a2href' => "https://theodorae.github.io/spatial/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/9gitExercice.png",
                    'title' => "Faith",
                    'description' => "Website",
                    'a1Title' => "Faith",
                    'a2href' => "https://theodorae.github.io/GitExo_faith/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/styleGenerator.png",
                    'title' => "Générateur de style",
                    'description' => "App",
                    'a1Title' => "Style Generator",
                    'a2href' => "https://theodorae.github.io/StyleGenerator/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/calculatrice.png",
                    'title' => "Calculator",
                    'description' => "App",
                    'a1Title' => "Calculator",
                    'a2href' => "https://theodorae.github.io/LAcalculatrice/"
                ],
                [
                    'filter' => "filter-front",
                    'imgsrc' => "img/work/toDoList.png",
                    'title' => "To do List",
                    'description' => "App",
                    'a1Title' => "To do List",
                    'a2href' => "https://theodorae.github.io/ToDoList/"
                ],
                [
                    'filter' => "filter-personal",
                    'imgsrc' => "img/work/pokemoon.png",
                    'title' => "PokeMoon",
                    'description' => "Game",
                    'a1Title' => "PokeMoon",
                    'a2href' => "https://theodorae.github.io/PokeMoon/"
                ],
                [
                    'filter' => "filter-personal",
                    'imgsrc' => "img/work/ProCalcul.png",
                    'title' => "ProCalcul",
                    'description' => "App",
                    'a1Title' => "ProCalcul",
                    'a2href' => "https://github.com/TheodoraE/ProCalcul"
                ]
            ]
        );
    }
}
