<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\estadoCuenta;
use App\servicioTratamiento;
//Clase request
use Illuminate\Http\Request;

//Clase DB
use Illuminate\Support\Facades\DB;

//Clase Storage
use Illuminate\Support\Facades\Storage;

//Clase Input
use Illuminate\Support\Facades\Input;

class tratamiento extends Model
{
    protected $fillable = [
        'paciente_id',
        'medico_id',
        'historiaClinica_id',
        'estadoCuentas_id'
    ];

    public static function nuevoTramiento(Request $request){
        //Variable de retorno de tipo boolean
        $exito = false;
        try{
            DB::beginTransaction();
            	//Almacenar en la tabla estado de cuenta.
                $cuenta  = new estadoCuenta();
                $cuenta -> total = $request -> get('totalT');
                $cuenta -> paciente_id = $request -> get('paciente');
                //Guardar la cuenta
                $cuenta-> save();
                //Obtener el id de la cuenta almacenada actualmente
		        $ultimaCuenta= estadoCuenta::orderBy('id','desc');
		        $ultimaCuentaID = $ultimaCuenta->first()->id;
		        //.................................................................
		       	// Almacenar el tratamiento
		        $tratamiento = new tratamiento();
		        $tratamiento -> paciente_id = $request -> get('paciente');
		        $tratamiento -> medico_id = $request->User()->id;
		        $tratamiento -> historiaClinica_id = "1"; //Flata componer ese campo
		       	$tratamiento -> estadoCuentas_id = $ultimaCuentaID ;
		       	$tratamiento-> save();
		       	//Obtener el id del tratamiento almacenado
		        $ultimoTratamiento= tratamiento::orderBy('id','desc');
		        $ultimoTratamientoID = $ultimoTratamiento->first()->id;
		        //...................................................................
		        //Almacenar el servicio-tratamiento
		        $info = explode('|',$request->get('info'));
		       for ($i=0; $i <count($info)-1; $i++){
		            $datos = explode('/',$info[$i]);
		            $servicioTratamiento= new servicioTratamiento();
		            $servicioTratamiento -> fechaI = $datos[1];
		            $servicioTratamiento -> fechaF = $datos[2];
		            $servicioTratamiento -> estado = "Pendiente";
		            $servicioTratamiento -> servicio_id = $datos[0];
		            $servicioTratamiento -> tratamiento_id = $ultimoTratamientoID;
		            $servicioTratamiento-> save(); 
		        }
            DB::commit();
            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }
        return $exito;
    }
}
