<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->string('question_type');
            $table->integer('questions_subject_id')->unsigned();
            $table->foreign('questions_subject_id')->references('subject_id')->on('subjects');
            $table->string('question_group_id');
            $table->boolean('question_status');
            $table->integer('question_level');
            $table->string('question_tips');
            $table->integer('question_point');
            $table->integer('question_false_point');
            $table->text('question_about');
            $table->string('question_photo');
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
        Schema::dropIfExists('questions');
    }
}
