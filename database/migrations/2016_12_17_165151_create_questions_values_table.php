<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_values', function (Blueprint $table) {
            $table->increments('value_id');
            $table->integer('value_question_id')->unsigned();
            $table->foreign('value_question_id')->references('question_id')->on('questions');
            $table->text('question_value');
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
        Schema::dropIfExists('questions_values');
    }
}
