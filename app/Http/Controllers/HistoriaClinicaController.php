<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Modelo del paciente
use App\paciente;

//Modelo de historia clínica
use App\historiaClinica; 

class HistoriaClinicaController extends Controller
{
    //Ver la historia clínica de un paciente
    public function showHC($id){
        $paciente = paciente::getPaciente($id);
        //$historiaClinica = historiaClinica::getHistoriaClinica($id);

        return view('pacientes.partials.historiaclinica')
        ->with('paciente',$paciente);
        ;
    }
}
