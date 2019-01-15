<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Personas',function(Blueprint $table){
             $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('cedula');
            $table->integer('Usuarios_id')->unsigned();
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade');
            $table->integer('Empleados_id')->unsigned();
            $table->foreign('Empleados_id')->references('id')->on('Empleados')->onDelete('cascade');
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
