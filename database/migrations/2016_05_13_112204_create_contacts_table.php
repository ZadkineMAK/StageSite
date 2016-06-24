<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('insertion')->nullable();
            $table->string('familyname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('companie_id')->nullable()->unsigned();
            $table->foreign('companie_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::drop('contacts');
    }
}
