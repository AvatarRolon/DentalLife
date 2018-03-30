<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//Dirección principal
Route::get('/', function () {
    return redirect('/login');
});
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Pacientes */
Route::post('pacientes/update','PacienteController@actualizar');
Route::resource('pacientes','PacienteController');

/* Catalógo de servicios*/
Route::resource('catalogoServicio', 'CatalogoServicioController');
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Middleware para autentificación y protecci+on de rutas */
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});