<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forward', function (Blueprint $table){
            $table->bigIncrements('forwardID');
            $table->bigInteger('mailID')->unsigned();
            $table->foreign('mailID')->references('mailID')->on('disposition');
            $table->string('origin');
            $table->string('destination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forward');
    }
}
