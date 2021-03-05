<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioDivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_divs', function (Blueprint $table) {
            $table->id();
            $table->string('filter');
            $table->string('imgsrc');
            $table->string('title');
            $table->string('description');
            $table->string('a1Title');
            $table->string('a2href');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_divs');
    }
}
