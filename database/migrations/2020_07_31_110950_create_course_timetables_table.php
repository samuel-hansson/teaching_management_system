<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_timetables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lesson',2)->unique();     //可以是“10”——一天10节课，那就是两个字符
            $table->time('start');
            $table->time('end');
            $table->timestamps();

            $table->index(['start','end']);

            //还有其它约束，如end减去start必须是45分钟
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_timetables');
    }
}
