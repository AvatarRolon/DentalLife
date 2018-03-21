<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//Dirección principal
Route::get('/', function () {
    return redirect('/login');
});
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Pacientes */

/* Vistas */
/* Ver todos los pacientes */
Route::get('/pacientes','PacienteController@index');

/* Ver paciente en especifico */
Route::get('/ver/paciente/{id}','PacienteController@verPaciente');

/* Vista agregar paciente */
Route::get('/agregar/paciente','PacienteController@formNuevoPaciente');

/* Almacenamiento de datos */
Route::post('/nuevo/paciente','PacienteController@create');
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Middleware para autentificación y protecci+on de rutas */
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});