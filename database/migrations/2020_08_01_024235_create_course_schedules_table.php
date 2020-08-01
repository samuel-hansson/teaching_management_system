<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ptps_id');
            $table->string('week',2);               //此处应该用enum,但必须有教务处设定本学期周数的功能才行。目前该功能没开发，因此，可以先设定该字段是字符串类型
            $table->enum('day',['1','2','3','4','5']);
            $table->unsignedInteger('ct_id');
            $table->timestamps();

//            $table->index(['ptps_id','week','day','ct_id']);  //没有考虑到班级，按理说，应该考虑到班级：某个班在某一个星期的某一天的某一节课上某门课程
            $table->foreign('ptps_id')->references('id')->on('professional_teaching_progress_schemes')
                ->onDelete('cascade');
            $table->foreign('ct_id')->references('id')->on('course_timetables')
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
        Schema::dropIfExists('course_schedules');
    }
}
