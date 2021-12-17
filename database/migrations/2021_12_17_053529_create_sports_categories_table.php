<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_categories', function (Blueprint $table) {
            $table->id();
            $table->date('dateassigment');
            $table->foreignId('sportcattitle_id')->constrained('sports_categories_titles');
            $table->foreignId('athlete_id')->constrained('athletes');
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
        Schema::dropIfExists('sports_categories');
    }
}
