<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleados',function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_persona')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_departamento')->unsigned();
            $table->string('descripcion_cargo');
            $table->date('fecha_ingreso');
            $table->date('fecha_retirado');
            $table->string('estado_empleado');
            $table->string('descripcion_transporte_ida');
            $table->string('descripcion_transporte_vuelta');
            $table->string('numero_habitacion');
            $table->string('numero_celular');
            $table->string('tipo_sangre');
            $table->string('profesion');
            $table->string('estado_civil');
            $table->string('educacion');

            $table->foreign('id_persona')->references('id')->on('Personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('Usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_departamento')->references('id')->on('Departamentos')->onDelete('cascade')->onUpdate('cascade');

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
