<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\paciente;
use App\categoriaServicio;
use App\User;
class TratamientoController extends Controller
{
    //
    public function index()
    {   
      return view('tratamiento.index'); 
    }
    
    public function create()
    {
        //Crear una lista de los pacientes
       $pacientes = paciente::get();
        $categorias = categoriaServicio::get();
        return view('tratamiento.create')
        ->with('pacientes', $pacientes)
        ->with('categorias', $categorias)
        ;
    }

    public function store(Request $request)
    {
        //Almacenar el id del doctor logueado
       // $id_doctor=  $request->User()->id;
        return ($request);
    }

    public function show($id)
    {
    	return "show";
    }

    public function edit($id)
    {
        return "edit";
    }

    public function update()
    {
    	return "update";
    }

    public function destroy($id)
    {
    	return "destroy";
    }
}
