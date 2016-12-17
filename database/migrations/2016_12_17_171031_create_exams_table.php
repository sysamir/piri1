<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('exam_id');
            $table->string('exam_name');
            $table->integer('exam_pass_point');
            $table->text('exam_desc');
            $table->integer('exam_duration');
            $table->dateTime('exam_start_datetime');
            $table->dateTime('exam_end_datetime');
            $table->boolean('exam_show_answers');
            $table->integer('exam_delete_point');
            $table->boolean('exam_show_result');
            $table->integer('exam_try_numbers');
            $table->boolean('exam_random_question');
            $table->string('exam_groups_id');
            $table->boolean('exam_rand_anwers');
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
        Schema::dropIfExists('exams');
    }
}
