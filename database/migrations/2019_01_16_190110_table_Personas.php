<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personas',function(Blueprint $table){
            $table->increments('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('cedula');
            $table->string('profesion');



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
