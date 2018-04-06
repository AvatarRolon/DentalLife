<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\paciente;

class CitaController extends Controller
{
    //
    public function index()
    {   
        return view('citas.index')
        ; 
    }
    
    public function create()
    {
        //Crear una lista de los pacientes
        //$pacientes = paciente::pluck('nombre','id')->prepend('selecciona');
        $pacientes = paciente::get();
        return view('citas.create')
        ->with('pacientes', $pacientes)
        ;
    }

    public function store(Request $request)
    {
        return "store";
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
