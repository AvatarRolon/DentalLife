<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Campos de la tabla tratamientos
            $table->integer('numeroCuenta');
            $table->string('nombre', 255);
            $table->date('fechaI');
            $table->date('fechaF');
            $table->float('total');

            //Llaves foraneas
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');

            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos');

            $table->integer('historiaClinica_id')->unsigned();
            $table->foreign('historiaClinica_id')->references('id')->on('historia_clinicas');

            //Campos autogenerados por el framework
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
        Schema::dropIfExists('tratamientos');
    }
}
