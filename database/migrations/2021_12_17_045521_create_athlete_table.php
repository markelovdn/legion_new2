<?php

use App\Models\Coach;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45);
            $table->string('secondname', 45);
            $table->string('patronymic', 45)->nullable();
            $table->date('dateofbirth')->nullable();
            $table->set('gender', ['male', 'female'])->nullable();
            $table->string('photo', 256)->nullable();
            $table->string('adress', 500)->nullable();
            $table->integer('status')->nullable();
            $table->foreignId('firstcoach_id')->constrained('coaches');
            $table->foreignId('secondcoach_id')->constrained('coaches');
            $table->foreignId('thirdcoach_id')->constrained('coaches');
            $table->foreignId('realcoach_id')->constrained('coaches');
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('studyplace_id')->constrained('study_places');
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('passpot_id')->constrained('passports');
            $table->foreignId('birthcertificate_id')->constrained('birth_certificates');
            $table->foreignId('snils_id')->constrained('snils');
            $table->foreignId('medicalpolicy_id')->constrained('medical_policies');
            $table->foreignId('scorganization_id')->constrained('organizations');
            $table->foreignId('ssorganization_id')->constrained('organizations');
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
        Schema::dropIfExists('athletes');
    }
}
