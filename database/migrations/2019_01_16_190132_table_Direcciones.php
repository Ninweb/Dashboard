<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direcciones',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_persona')->unsigned();
            $table->string('parroquia');
            $table->string('municipio');
            $table->string('alcaldia');
            $table->string('ciudad');
            $table->string('zona');

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
