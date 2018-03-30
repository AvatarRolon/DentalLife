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

//Datatables
use Yajra\Datatables\Datatables;

class PacienteController extends Controller
{        
    //Index de pacientes
    public function index(Request $request){       
        if($request->ajax()){
            $pacientes = paciente::select(['id','nombre','telefono','ocupacion','edad','sexo']);
 
            return DataTables::of($pacientes)
            ->addColumn('action',function ($pacientes){
                return '<a href="/pacientes/'.$pacientes -> id.'"><i class="ico-cream ico-b-cream fa fa-eye" data-toggle="tooltip" title="Ver paciente"></i></a>
                        &nbsp;
                        <a href="/pacientes/'.$pacientes -> id.'/edit"><i class="ico-cream ico-b-cream fa fa-edit" data-toggle="tooltip" title="Editar paciente"></i></a>
                        &nbsp;
                        <a><i class="ico-cream ico-b-cream fa fa-history" data-toggle="tooltip" title="Ver Historia Cl&iacute;nica"></i></a>
                        &nbsp;
                        <a id="btnDeletePaciente" onclick="deletePaciente('.$pacientes -> id.')" data-remote="'.$pacientes -> id.'"><i class="ico-cream ico-r-cream fa fa-trash" data-toggle="tooltip" title="Borrar paciente"></i></a>';
            })
            ->make(true)
            ;
        }       
        return view('pacientes.index');
    }

    //Metodo que almacena los datos de los pacientes
    public function store(createPaciente $request){    
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
        return redirect('pacientes');
    }

    //Actualizar información de un paciente
    public function actualizar(createPaciente $request){
        $booleanUpdate = paciente::updatePaciente($request);

        if($booleanUpdate){
            alert()->success('La información del paciente se actualizó con éxito','Éxito');
        }else{
            alert()->error('No hemos podido actualizar al paciente :(','Error inesperado');
        }

        return redirect('/pacientes');
    }

    //Ver un paciente en especcífico
    public function show($id){
        $paciente = paciente::getPaciente($id);
        return view('pacientes.partials.show')
        ->with('paciente',$paciente);
        ;
    }

    //Eliminar un paciente
    public function destroy($id){
        $booleanDelete =  paciente::deletePaciente($id);

        if($booleanDelete){
            alert()->success('El paciente ha sido eliminado con éxito','Éxito');
        }else{
            alert()->error('No hemos podido eliminar al paciente :(','Error inesperado');
        }
        
        return redirect('pacientes');
    }

    //Formulario para un nuevo paciente
    public function create(){                            
        return view('pacientes.partials.create');
    }

    //Formulario para editar un nuevo paciente
    public function edit($id){
        $paciente = paciente::getPaciente($id);
        return view('pacientes.partials.edit')
        ->with('paciente',$paciente)
        ;
    }
}
