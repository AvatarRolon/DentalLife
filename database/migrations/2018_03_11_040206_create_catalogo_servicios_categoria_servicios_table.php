<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoServiciosCategoriaServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_servicios_categoria_servicios', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Llaves foraneas
            $table->integer('catalogoServ_id')->unsigned();
            $table->foreign('catalogoServ_id')->references('id')->on('catalogo_servicios');

            $table->integer('categoriaServ_id')->unsigned();
            $table->foreign('categoriaServ_id')->references('id')->on('categoria_servicios');

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
        Schema::dropIfExists('catalogo_servicios_categoria_servicios');
    }
}
