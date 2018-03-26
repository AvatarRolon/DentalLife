<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistentes', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id');

            //Campos de la tabla asistentes
            $table->string('CURP', 18);
            $table->string('nombre', 30);
            $table->string('apPat', 20);
            $table->string('apMat', 20)->nullable();
            $table->string('RFC', 13)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('edad', 2);
            $table->date('fechaNac');
            $table->string('sexo', 1);
            $table->string('numCasa', 4);
            $table->string('calle', 50);
            $table->string('colonia', 25);
            $table->date('fechaIngreso');
            $table->string('foto')->default('default.jpg');

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
        Schema::dropIfExists('asistentes');
    }
}
