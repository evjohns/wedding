<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function($table)
        {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->string('starter');
            $table->string('main');
            $table->string('side');
            $table->string('requirements');
            $table->boolean('attending');
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
        Schema::drop('guests');
    }
}
