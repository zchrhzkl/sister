<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming', function (Blueprint $table){
            $table->bigIncrements('incomingID');
            $table->bigInteger('mailID')->unsigned();
            $table->foreign('mailID')->references('mailID')->on('disposition')->onDelete('cascade');
            $table->string('mailNumber');
            $table->string('mailContent');
            $table->string('mailAttch');
            $table->string('mailStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming');
    }
}
