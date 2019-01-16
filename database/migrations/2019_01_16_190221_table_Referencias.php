<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableReferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Referencias',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_persona')->unsigned();
            $table->string('tiempo_conocido');
            $table->string('telefono');

            $table->foreign('id_persona')->references('id')->on('Personas')->onDelete('cascade');

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
