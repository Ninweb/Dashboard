<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSalarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salarios', function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_empleado')->unsigned();
            $table->integer('salario_base');
            $table->integer('salario_ticket');
            $table->integer('salario_seguro');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');


            $table->foreign('id_empleado')->references('id')->on('Empleados')->onDelete('cascade')->onUpdate('cascade');

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
