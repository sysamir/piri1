<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('gu_relations', function (Blueprint $table) {
           $table->increments('gs_id');
           $table->integer('gu_group_id')->unsigned();
           $table->foreign('gu_group_id')->references('group_id')->on('groups');
           $table->integer('gu_user_id')->unsigned();
           $table->foreign('gu_user_id')->references('id')->on('users');
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
