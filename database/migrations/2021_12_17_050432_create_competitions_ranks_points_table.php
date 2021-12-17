<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsRanksPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions_ranks_points', function (Blueprint $table) {
            $table->id();
            $table->integer('point');
            $table->foreignId('compranktitle_id')->constrained('competitions_ranks_titles');
            $table->foreignId('age_id')->constrained('ages');
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
        Schema::dropIfExists('competitions_ranks_points');
    }
}
