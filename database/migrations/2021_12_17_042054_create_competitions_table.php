<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->date('datebegin');
            $table->date('datefinish');
            $table->string('title', 256);
            $table->string('address', 256);
            $table->string('linkreport', 256);
            $table->integer('status')->default(1);
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('region_id')->constrained('regions');

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
        Schema::dropIfExists('competitions');
    }
}
