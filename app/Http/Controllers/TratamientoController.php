<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\paciente;
use App\categoriaServicio;
use App\User;
use App\tratamiento;
use App\servicioTratamiento;
use App\servicio;
use App\estadoCuenta;
class TratamientoController extends Controller
{
    //
    public function index(){   
        //Ir al menu del catálogo de servicios 
        $auxTratamiento= tratamiento::get();
        for ($i=0; $i<count($auxTratamiento); $i++){
           $paciente = paciente::where('id', '=', $auxTratamiento[$i]->paciente_id)->get(['nombre','apPat','apMat']);
            $tratamientos[$i] = [
                "id" =>$auxTratamiento[$i]->id,
                "paciente" =>$paciente[0]->nombre." ".$paciente[0]->apPat." ".$paciente[0]->apMat
            ];
        }
        if(isset($tratamientos)){
            return view('tratamiento.index')
            ->with('tratamientos', $tratamientos)
            ;
        }
        return view('tratamiento.index')
        ; 
    }
    
    public function create(){
        //Crear una lista de los pacientes
       $pacientes = paciente::get();
        $categorias = categoriaServicio::get();
        return view('tratamiento.create')
        ->with('pacientes', $pacientes)
        ->with('categorias', $categorias)
        ;
    }

    public function store(Request $request){
       //Paso del request validado al modelo tratamiento para almacenar los datos en la BD
       //Además de almacenar el resultado booleano para mandar un mensaje de erro o éxito
        $booleanCreate = tratamiento::nuevoTramiento($request);
        if($booleanCreate){
            //Mensaje de Sweet Alert de éxito
            alert()->success('El paciente ha sido registado con éxito','Éxito'); 
             return view('tratamiento.index'); 
        }else{
            //Mensaje de Sweet Alert de error
            alert()->error('Ocurrio un error y los datos no fueron almacenados :(','Error inesperado');
            return redirect()->route('tratamiento.index');
        }  
    }

    public function show($id){
       //Buscar tratamiento
        $tratamiento= tratamiento::where('id', '=', $id)->get();
        //Buscar el total de la cuenta
        $total = estadoCuenta::where('id', '=', $tratamiento[0]->estadoCuentas_id)->get(['total']);
        //Nombre del paciente
        $paciente = paciente::where('id', '=', $tratamiento[0]->paciente_id)->get(['nombre','apPat','apMat']);
        //Buscar los servicios
        $auxServicio =servicioTratamiento::where('tratamiento_id', '=', $id)->get();
        for ($i=0; $i<count($auxServicio); $i++){
            $nameS=servicio::where('id', '=',$auxServicio[$i]->servicio_id)->get(['nombre']);
            $servicios[$i] = [
                "descripcion" =>$nameS[0]->nombre,
                "fechaI" =>$auxServicio[$i]->fechaI,
                "fechaF" =>$auxServicio[$i]->fechaF,
                "estado" =>$auxServicio[$i]->estado
            ];
        }
        if(isset($servicios)){
            return view('tratamiento.show')
            ->with('total', $total)
            ->with('paciente', $paciente)
            ->with('servicios', $servicios)
            ;
        }
    	return view('tratamiento.show') 
        ->with('total', $total)
        ->with('paciente', $paciente)
        ;
    }

    public function edit($id){
        return "edit";
    }

    public function update(){
    	return "update";
    }

    public function destroy($id){
    	return "destroy";
    }
}
