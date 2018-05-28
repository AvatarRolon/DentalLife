<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//Dirección principal
Route::get('/', function () {
    return redirect('/login');
});
//////////////////////////////////////////////////////////////////////////////////////////////////////
/* Pacientes */
Route::post('pacientes/update','PacienteController@actualizar');
Route::get('pacientes/historia/{paciente}','HistoriaClinicaController@showHC');
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
/* Middleware para autentificación y protección de rutas */
Route::group(['middleware' => 'auth'], function () {
    
});