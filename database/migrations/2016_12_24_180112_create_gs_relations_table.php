<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGsRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('gs_relations', function (Blueprint $table) {
          $table->increments('gs_id');
          $table->integer('gs_group_id')->unsigned();
          $table->foreign('gs_group_id')->references('group_id')->on('groups');
          $table->integer('gs_science_id')->unsigned();
          $table->foreign('gs_science_id')->references('science_id')->on('sciences');
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
        //
    }
}
