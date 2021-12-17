<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->date('validuntil');
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('coach_id')->constrained('coaches');
            $table->foreignId('organization_id')->constrained('organizations');
            $table->string('scanlink', 300);
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
        Schema::dropIfExists('licenses');
    }
}
