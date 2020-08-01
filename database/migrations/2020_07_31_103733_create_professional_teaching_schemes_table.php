<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalTeachingSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_teaching_schemes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->unique();
            $table->unsignedTinyInteger('credit');
            $table->unsignedTinyInteger('class_hours');
            $table->unsignedInteger('ptp_id');
            $table->unsignedInteger('course_id');
            $table->timestamps();

            $table->index(['ptp_id','course_id']);
            $table->foreign('ptp_id')->references('id')->on('personnel_training_programs')
                ->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_teaching_schemes');
    }
}
