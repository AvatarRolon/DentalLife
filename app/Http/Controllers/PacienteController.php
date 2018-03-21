<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacienteController extends Controller
{        
    //Index de pacientes
    public function index(Request $request){
        return view('pacientes.Layouts.pacientes');
    }

    //Metodo que almacena los datos de los pacientes
    public function create(Request $request){
        /*$this->validate($request,[
            //Reglas de validación
            'CURP' => 'required|max:18'            
        ],[
            //Mensajes de error
            'CURP.required' => 'El campo CURP es requerido',
            'CURP.max' => 'El campo CURP solo admite 18'
        ]);

        //Redireccionar al formulario
        return redirect()->route('/agregar/paciente');*/
        return dd($request);
        //return $request->file('otro')->store('public/img');
    }

    //Ver un paciente en especcífico
    public function verPaciente($id){
        return view('pacientes.Layouts.verPaciente')
        ->with('id',$id);
        ;
    }

    //Formulario para un nuevo paciente
    public function formNuevoPaciente(){
        return view('pacientes.Layouts.agregarPaciente');
    }
}
