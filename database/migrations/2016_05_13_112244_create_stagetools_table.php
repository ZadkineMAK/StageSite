<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagetoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagetools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tool_id')->unsigned();
            $table->foreign('tool_id')->references('id')->on('tools');
            $table->integer('stage_user_id')->unsigned();
            $table->foreign('stage_user_id')->references('id')->on('stage_users')->onDelete('cascade');
            $table->integer('companie_id')->unsigned();
            $table->foreign('companie_id')->references('id')->on('companies');
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
        Schema::drop('stagetools');
    }
}
