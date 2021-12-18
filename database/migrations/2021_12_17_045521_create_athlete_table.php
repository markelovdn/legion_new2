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
            $table->string('address', 500)->nullable();
            $table->integer('status')->nullable();
            $table->foreignId('studyplace_id')->nullable()->constrained('study_places');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('district_id')->nullable()->constrained('districts');
            $table->foreignId('region_id')->nullable()->constrained('regions');
            $table->foreignId('passport_id')->nullable()->constrained('passports');
            $table->foreignId('birthcertificate_id')->nullable()->constrained('birth_certificates');
            $table->foreignId('snils_id')->nullable()->constrained('snils');
            $table->foreignId('medicalpolicy_id')->nullable()->constrained('medical_policies');
            $table->foreignId('user_id')->nullable()->constrained('users');
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
