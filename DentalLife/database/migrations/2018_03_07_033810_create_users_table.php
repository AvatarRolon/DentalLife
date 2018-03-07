<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Id de la tabla
            $table->increments('id'); 

            //Clave foranea del campo id en médico
            $table->Integer('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos')->after('medicos'); 

            //Campo de email
            $table->string('email');

            //Campo user, es el nombre del usuario
            $table->string('user');

            //Campo password, contiene la contraseña del usuario
            $table->string('password');

            //Campos autogenerados por el framework
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
