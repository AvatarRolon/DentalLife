<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioTratamientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tratamientos', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');
            //Datos de la tabla
            $table->date('fechaI');
            $table->date('fechaF');
            $table->string('estado', 30);

            //Llaves foraneas
            $table->integer('servicio_id')->unsigned();
            $table->foreign('servicio_id')->references('id')->on('servicios');

            $table->integer('tratamiento_id')->unsigned();
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos');


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
        Schema::dropIfExists('servicio_tratamientos');
    }
}
