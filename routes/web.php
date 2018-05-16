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
/*Categoria de los servicios*/
Route::resource('categoriaServicio', 'CategoriaServicioController');
/*Citas*/
Route::resource('citas','CitaController');
/*Abonos*/
Route::resource('abono','AbonoController');
/*Tratamientos*/
Route::resource('tratamientos','TratamientoController');
Route::get('/selectServicios/{id}','ServicioController@getServicios');

//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Middleware para autentificación y protecci+on de rutas */
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});