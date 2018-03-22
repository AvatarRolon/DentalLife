<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Clase request
use Illuminate\Http\Request;

//Clase DB
use Illuminate\Support\Facades\DB;


class paciente extends Model
{
    protected $fillable = [
        'CURP',
        'nombre',
        'apPat',
        'apMat',
        'RFC',
        'telefono',
        'email',
        'edad',
        'fechaNac',
        'sexo',
        'numCasa',
        'calle',
        'colonia',
        'ocupacion',
        'fechaIngreso',
        'foto'
    ];

    public static function nuevoPaciente(Request $request){
        ///////////////////////////////////////////////////////////////
        //Variable de retorno de tipo boolean
        $exito = false;

        ///////////////////////////////////////////////////////////////
        //Variables de fecha de nacimiento
        $fechaNac = explode('-',$request->get('fechaNac'));
        $dayNac = (int) $fechaNac[2];
        $monthNac = (int) $fechaNac[1];
        $yearNac = (int) $fechaNac[0];
        
        //Variables de fecha actual
        $fechaActual = getdate();
        $dayA = (int) $fechaActual['mday'];
        $monthA = (int) $fechaActual['mon'];
        $yearA = (int) $fechaActual['year'];

        //Variable edad
        $edad = 0;

        //Calculo de la edad
        if( $dayA >= $dayNac && $monthA >= $monthNac){
            $edad = $yearA - $yearNac;
        }else if($dayA < $dayNac && $monthA > $monthNac){
            $edad = $yearA - $yearNac -1;
        }else if($dayA > $dayNac && $monthA < $monthNac){
            $edad = $yearA - $yearNac - 1;
        }else if($dayA < $dayNac && $monthA < $monthNac){
            $edad = $yearA - $yearNac - 1;
        }

        $fechaActual = $yearA.'-'.$monthA.'-'.$dayA;
        ///////////////////////////////////////////////////////////////
        try{
            DB::beginTransaction();

                $paciente  = new paciente();

                $paciente -> CURP = $request -> get('CURP');
                $paciente -> nombre = $request -> get('nombre');
                $paciente -> apPat = $request -> get('appat');
                $paciente -> apMat = $request -> get('apmat');;
                $paciente -> RFC = $request -> get('RFC');
                $paciente -> telefono = $request -> get('telefono');
                $paciente -> email = $request -> get('email');
                $paciente -> edad = $edad; //Pendiente
                $paciente -> fechaNac = $request -> get('fechaNac');
                $paciente -> sexo = $request -> get('sexo');
                $paciente -> numCasa = $request -> get('numCasa');
                $paciente -> calle = $request -> get('calle');
                $paciente -> colonia = $request -> get('colonia');
                $paciente -> ocupacion = $request -> get('ocupacion');
                $paciente -> fechaIngreso = $fechaActual; //Pendiente
                $paciente -> foto =  $request->file('foto')->store('public/avatar/pacientes'); //Pendiente

                $paciente -> save();

            DB::commit();

            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }

        return $exito;
    }
}
