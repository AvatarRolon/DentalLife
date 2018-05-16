<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbonoController extends Controller
{
    //
    public function index()
    {   
        return view('abonos.index')
        ; 
    }
    
    public function create()
    {
        //Obtener la fecha actual del sistema.
        $fechaActual = new \DateTime();
        
        return view('abonos.create')
        ->with('fechaActual', $fechaActual)
        ;
    }

    public function store()
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
