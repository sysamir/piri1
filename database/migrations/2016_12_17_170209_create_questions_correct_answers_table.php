<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsCorrectAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_correct_answers', function (Blueprint $table) {
            $table->increments('correct_row_id');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('question_id')->on('questions');
            $table->string('question_type');
            $table->integer('question_value_id');
            $table->integer('answer_value_id');
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
        Schema::dropIfExists('questions_correct_answers');
    }
}
