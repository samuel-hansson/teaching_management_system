<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalTeachingProgressSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_teaching_progress_schemes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('semester',1);
            $table->unsignedInteger('pts_id');
            $table->timestamps();

            $table->index(['pts_id','semester']);
            $table->foreign('pts_id')->references('id')->on('professional_teaching_schemes')
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
        Schema::dropIfExists('professional_teaching_progress_schemes');
    }
}
