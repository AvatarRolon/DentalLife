<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulaProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedula_profesionals', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Campos de la tabla cedula_profesionals
            $table->string('profesion', 30);
            $table->date('anioExpedicion');
            $table->string('institucion', 50);
            $table->string('tipo', 2);

            //Llaves foraneas
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos');

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
        Schema::dropIfExists('cedula_profesionals');
    }
}
