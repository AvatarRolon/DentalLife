<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\categoriaServicio;
use App\Http\Requests\categoria;
use Alert;

class CategoriaServicioController extends Controller
{
   public function store(categoria $request)
    {
        //Almacenar en la BD el servicio creado 
        $booleanCreate= categoriaServicio::nuevaCategoria($request);
        if($booleanCreate){
            //Mensaje de Sweet Alert de éxito
            Alert::message('La categoria ha sido registado con éxito', 'Éxito')->persistent('Cerrar');
            return redirect()->route('catalogoServicio.create');
        }else{
            //Mensaje de Sweet Alert de error
            alert()->error('Ocurrio un error y los datos no fueron almacenados :(','Error inesperado');
            return redirect()->route('catalogoServicio.create');
        }   
    }
}
