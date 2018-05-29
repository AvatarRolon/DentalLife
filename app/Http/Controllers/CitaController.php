<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Modelo de pacientes
use App\paciente;

//Modelo de historia clinica
use App\historiaClinica;

use App\cita;

class CitaController extends Controller
{
    

    //Función index
    public function index(){           
        return view('citas.index'); 
    }
    
    public function create()
    {
        //Crear una lista de los pacientes
        $pacientes = paciente::get();
        return view('citas.create')
        ->with('pacientes', $pacientes)        
        ;        
    }

    public function guardar(Request $request)
    {
        $medico = $request->User()->id_medico;

        $hc = historiaCLinica::getHistoriaClinica($request->get('paciente'));
        $hc = $hc -> id;

        cita::nuevaCita($request, $medico, $hc);

        alert()->success('La cita ha sido agendada con éxito','Éxito');     

        //Redireccionamiento a nuevo paciente
        return redirect('citas');        
    }

    /*public function show($id)
    {
    	return "show";
    }*/

    public function edit($id){
        $pacientes = paciente::get();
        $cita = cita::getCita($id);

        return view('citas.edit')
        ->with('pacientes', $pacientes)
        ->with('cita',$cita)
        ->with('id',$id)
        ;
    }

    public function update(Request $request)
    {
        $medico = $request->User()->id_medico;

        $hc = historiaCLinica::getHistoriaClinica($request->get('paciente'));
        $hc = $hc -> id;        

        $cita = cita::updateCita($request, $medico, $hc);
        
        alert()->success('La cita ha sido editada con éxito','Éxito');     

        //Redireccionamiento a nuevo paciente
        return redirect('citas');
    }

    public function destroy($id)
    {
        $booleanDelete =  cita::downCita($id);

        if($booleanDelete){
            alert()->success('La cita se canceló con éxito','Éxito');
        }else{
            alert()->error('No hemos podido cancelar la cita :(','Error inesperado');
        }
        
        return redirect('citas');
    }

    //Trae las citas
    public function getCitas(Request $request){
        if($request->ajax()){
            $arrayCitas = Array();
            $citas = cita::getCitas();

            foreach($citas as $cita){
                array_push($arrayCitas, array('id'=>$cita->id,'title'=>$cita->asunto,'start'=>$cita->fecha.'T'.$cita->horaI,'end'=>$cita->fecha.'T'.$cita->horaF)); 
            }

            return response()->json($arrayCitas);
        }
    }
}
