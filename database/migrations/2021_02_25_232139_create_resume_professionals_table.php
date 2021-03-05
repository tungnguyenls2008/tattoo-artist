<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_professionals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date')->nullable();
            $table->string('institution');
            $table->string('task1');
            $table->string('task2');
            $table->string('task3');
            $table->string('task4');
            $table->string('task5')->nullable();
            $table->string('task6')->nullable();
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
        Schema::dropIfExists('resume_professionals');
    }
}
