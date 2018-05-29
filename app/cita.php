<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//Clase request
use Illuminate\Http\Request;

//Clase DB
use Illuminate\Support\Facades\DB;

class cita extends Model
{
    protected $fillable = [
        'fecha',
        'horaI',
        'asunto',
        'horaF',        
        'estado',
        'paciente_id',
        'medico_id',
        'historiaClinica_id'
    ];

    public static function getCitas(){
        $citas = cita::where('estado','=','up')->get();
        return $citas;
    }

    public static function getCita($id){
        $cita = cita::findOrFail($id);
        return $cita;
    }

    public static function nuevaCita(Request $request, $medico, $hc){
        try{
            DB::beginTransaction();
                $cita = new cita();

                $cita -> fecha = $request -> get('fecha');
                $cita -> horaI = $request -> get('horaI');
                $cita -> asunto = $request -> get('asunto');
                $cita -> horaF = $request -> get('horaF');
                $cita -> estado = "up";
                $cita -> paciente_id = $request -> get('paciente');
                $cita -> medico_id = $medico;
                $cita -> historiaClinica_id = $hc;

                $cita -> save();

            DB::commit();
            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }
        
        return $exito;
    }

    public static function updateCita(Request $request, $medico, $hc){
        try{
            DB::beginTransaction();
                $cita = cita::findOrFail($request->idcita);

                $cita -> fecha = $request -> get('fecha');
                $cita -> horaI = $request -> get('horaI');
                $cita -> asunto = $request -> get('asunto');
                $cita -> horaF = $request -> get('horaF');
                $cita -> estado = "up";
                $cita -> paciente_id = $request -> get('paciente');
                $cita -> medico_id = $medico;
                $cita -> historiaClinica_id = $hc;

                $cita -> save();

            DB::commit();
            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }
        
        return $exito;                
    }

    public static function downCita($id){
        try{
            DB::beginTransaction();
                $cita = cita::findOrFail($id);
                
                $cita -> estado = 'down';

                $cita -> save();
            DB::commit();
            $exito = true;
        }catch(Exception $e){
            DB::rollback();
            $exito = false;
        }        

        return $exito;
    }
}