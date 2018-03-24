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
Route::name('verPacientes')->get('/pacientes','PacienteController@index');

/* Ver paciente en especifico */
Route::name('verPaciente')->get('/ver/paciente/{id}','PacienteController@verPaciente');

/* Vista agregar paciente */
Route::name('agregarPaciente')->get('/agregar/paciente','PacienteController@formNuevoPaciente');

/* Proceso de datos */
/* Agregar un nuevo paciente*/
Route::name('nuevoPaciente')->post('/nuevo/paciente','PacienteController@create');

/* Eliminar un paciente */
Route::name('eliminarPaciente')->post('/eliminar/paciente/{id}','PacienteController@delete');
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Middleware para autentificación y protecci+on de rutas */
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});