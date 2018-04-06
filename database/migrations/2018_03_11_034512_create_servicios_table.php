<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Campos de la tabla servicios
            $table->string('nombre', 255);
            $table->decimal('costo', 15, 2);
           
            //Llaves foraneas
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
        Schema::dropIfExists('servicios');
    }
}
