<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposition', function (Blueprint $table){
            $table->bigIncrements('mailID');
            $table->bigInteger('userID')->unsigned();
            $table->foreign('userID')->references('userID')->on('users');
            $table->timestamp('mailDate');
            $table->string('mailClassification');
            $table->string('mailDegree');
            $table->string('archiveBool')->nullable();
            $table->string('printBool')->nullable();
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
        Schema::dropIfExists('disposition');
    }
}
