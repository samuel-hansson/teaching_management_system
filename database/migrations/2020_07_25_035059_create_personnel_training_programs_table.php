<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelTrainingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_training_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->unique();
            $table->string('grade',4);
            $table->unsignedInteger('speciality_id');
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
        Schema::dropIfExists('personnel_training_programs');
    }
}
