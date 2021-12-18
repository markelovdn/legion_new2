<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthleteCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_coach', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('coach_id')->constrained('coaches');
            $table->integer('coach_type')->nullable();
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
        Schema::dropIfExists('athlete_coach');
    }
}
