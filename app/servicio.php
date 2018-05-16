<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Clase request
use Illuminate\Http\Request;

//Clase DB
use Illuminate\Support\Facades\DB;

//Clase Storage
use Illuminate\Support\Facades\Storage;

//Clase Input
use Illuminate\Support\Facades\Input;

class servicio extends Model
{
    protected $fillable = [
        'nombre',
        'costo',
        'categoriaServ_id'
    ];
    //.......................................................
    public static function getServicios($id){        
        $servicios = servicio::where('categoriaServ_id','=',$id)->get();
        return $servicios;
    }
    //..................................................................
	public static function nuevoServicio(Request $request){
        ///////////////////////////////////////////////////////////////
        //Variable de retorno de tipo boolean
        $exito = false;

        try{
            DB::beginTransaction();

            $servicio  = new servicio();
            $servicio -> nombre = $request -> get('nombre');
            $servicio -> costo = $request -> get('costo');
            $servicio -> categoriaServ_id = $request -> get('categoriaServ_id');

            //Guardar al servicio
            $servicio -> save();
            DB::commit();
            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }
       return $exito;
    }

    //..................................................................
    public static function updateServicio(Request $request,$id){
        $exito = false;
        ///////////////////////////////////////////////////////////////
        try{

            DB::beginTransaction();
            $servicio = servicio::findOrFail($id); 
            $servicio -> nombre = $request -> get('nombre');
            $servicio -> costo = $request -> get('costo');
            $servicio -> categoriaServ_id = $request -> get('categoriaServ_id');
            $servicio -> save();
            DB::commit();

            $exito = true;
        }catch(Exception $e){

            DB::rollback();
            $exito = false; 
        }

        return $exito;
    }
    //...........................................................................................
     public static function deleteServicio($id){
        try{
            DB::beginTransaction();
            $servicio = servicio::findOrFail($id);
            $servicio->delete();
            DB::commit();
            $exito = true;
        }catch(Exception $e){
            DB::rollback();
            $exito = false;
        }        
        return $exito;
    }
}
