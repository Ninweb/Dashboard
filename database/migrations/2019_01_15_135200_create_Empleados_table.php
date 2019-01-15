<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Empleados',function(Blueprint $table){

            $table->increments('id');
            $table->string('descripcion_cargo');
            $table->string('fecha_ingreso');
            $table->string('estado_empleado');
            $table->string('fecha_retirado');
            $table->integer('Salarios_id')->unsigned();
            $table->foreign('Salarios_id')->references('id')->on('Salarios')->onDelete('cascade');
            $table->integer('Departamentos_id')->unsigned();
            $table->foreign('Departamentos_id')->references('id')->on('Departamentos')->onDelete('cascade');
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
