<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_inspections', function (Blueprint $table) {
            $table->id();
            $table->date('dateinsp');
            $table->text('note');
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('organization_id')->constrained('organizations');
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
        Schema::dropIfExists('medical_inspections');
    }
}
