<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldoFaltantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_faltantes', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Campos de la tabla saldo_faltantes
            $table->float('saldo');
           
            //Llaves foraneas
            $table->integer('abono_id')->unsigned();
            $table->foreign('abono_id')->references('id')->on('abonos');

            $table->integer('estadoCuenta_id')->unsigned();
            $table->foreign('estadoCuenta_id')->references('id')->on('estado_cuentas');


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
        Schema::dropIfExists('saldo_faltantes');
    }
}
