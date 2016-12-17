<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_values', function (Blueprint $table) {
            $table->increments('answer_id');
            $table->integer('answer_question_id')->unsigned();
            $table->foreign('answer_question_id')->references('question_id')->on('questions');
            $table->text('answer_value');
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
        Schema::dropIfExists('answers_values');
    }
}
