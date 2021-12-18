<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions_results', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_fights');
            $table->integer('place');
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('competition_id')->constrained('competitions');
            $table->foreignId('weight_id')->constrained('weight_categories');
            $table->foreignId('age_id')->constrained('ages');
            $table->foreignId('rankpoint_id')->constrained('competitions_ranks_points');
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
        Schema::dropIfExists('competitions_results');
    }
}
