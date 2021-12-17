<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_athletes', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45);
            $table->string('secondname', 45);
            $table->string('patronymic', 45)->nullable();
            $table->date('dateofbirth')->nullable();
            $table->set('status', ['main', 'secondary'])->nullable();
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('workplace_id')->constrained('work_places');
            $table->foreignId('passport_id')->constrained('passports');
            $table->foreignId('snils_id')->constrained('snils');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('parent_athletes');
    }
}
