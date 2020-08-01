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
            //该字段应该设置为enum类型，但必须有教务处设定一天最多课时数的功能才行。目前该功能没开发，因此，可以先设定该字段是字符串类型
            $table->string('lesson',2)->unique();     //可以是“10”——一天10节课，那就是两个字符

            $table->time('start');
            $table->time('end');
            $table->timestamps();

            $table->index(['start','end']);

            //还有其它约束没写，如end减去start必须是45分钟
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
