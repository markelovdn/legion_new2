<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decrees', function (Blueprint $table) {
            $table->id();
            $table->string('series', 45);
            $table->string('num', 45);
            $table->date('dateissue');
            $table->string('title', 255);
            $table->foreignId('organization_id')->constrained('organizations');
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('coach_id')->constrained('coaches');
            $table->string('scanlink');
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
        Schema::dropIfExists('decrees');
    }
}
