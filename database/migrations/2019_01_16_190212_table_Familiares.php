<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFamiliares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Familiares',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_Persona')->unsigned();
            $table->string('parentezco');
            $table->string('telefono');
            $table->string('sexo');

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
