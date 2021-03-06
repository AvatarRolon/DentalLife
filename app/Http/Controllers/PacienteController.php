<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Modelo paciente
use App\paciente;

//Form Requests
use App\Http\Requests\createPaciente;

//Sweet Alert
use Alert;

class PacienteController extends Controller
{        
    //Index de pacientes
    public function index(Request $request){    
        $pacientes = paciente::getpacientes();            
        return view('pacientes.Layouts.pacientes')
        ->with(['pacientes' => $pacientes])
        ;
    }

    //Metodo que almacena los datos de los pacientes
    public function create(createPaciente $request){    
        //Paso del request validado al modelo paciente para almacenar los datos en la BD
        //Además de almacenar el resultado booleano para mandar un mensaje de erro o éxito
        $booleanCreate = paciente::nuevoPaciente($request);
        
        if($booleanCreate){
            //Mensaje de Sweet Alert de éxito
            alert()->success('El paciente ha sido registado con éxito','Éxito'); 
        }else{
            //Mensaje de Sweet Alert de error
            alert()->error('Ocurrio un error y los datos no fueron almacenados :(','Error inesperado');
        }                        

        //Redireccionamiento a nuevo paciente
        return redirect()->route('agregarPaciente');
    }

    //Ver un paciente en especcífico
    public function verPaciente($id){
        $paciente = paciente::getPaciente($id);
        return view('pacientes.Layouts.verPaciente')
        ->with('paciente',$paciente);
        ;
    }

    public function update(createPaciente $request){
        $booleanUpdate = paciente::updatePaciente($request);

        if($booleanUpdate){
            alert()->success('La información del paciente se actualizó con éxito','Éxito');
        }else{
            alert()->error('No hemos podido actualizar al paciente :(','Error inesperado');
        }

        return redirect()->back();
    }

    //Eliminar un paciente
    public function delete($id){
        $booleanDelete =  paciente::deletePaciente($id);

        if($booleanDelete){
            alert()->success('El paciente ha sido eliminado con éxito','Éxito');
        }else{
            alert()->error('No hemos podido eliminar al paciente :(','Error inesperado');
        }
        
        return redirect()->route('verPacientes');
    }

    //Formulario para un nuevo paciente
    public function formNuevoPaciente(){                            
        return view('pacientes.Layouts.agregarPaciente');
    }

    //Formulario para editar un nuevo paciente
    public function formEditarPaciente($id){
        $paciente = paciente::getPaciente($id);
        return view('pacientes.Layouts.editarPaciente')
        ->with('paciente',$paciente)
        ;
    }
}
