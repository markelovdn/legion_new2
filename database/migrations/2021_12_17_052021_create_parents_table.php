<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45);
            $table->string('secondname', 45);
            $table->string('patronymic', 45)->nullable();
            $table->foreignId('workplace_id')->nullable()->constrained('work_places');
            $table->foreignId('passport_id')->nullable()->constrained('passports');
            $table->foreignId('snils_id')->nullable()->constrained('snils');
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
        Schema::dropIfExists('parents');
    }
}
