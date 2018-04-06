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

class categoriaServicio extends Model
{
    protected $fillable = [
        'nombre'
    ];

    //..................................................................
	public static function nuevaCategoria(Request $request){
        ///////////////////////////////////////////////////////////////
        //Variable de retorno de tipo boolean
        $exito = false;

        try{
            DB::beginTransaction();

            $categoria  = new categoriaServicio();
            $categoria -> nombre = $request -> get('nombreCategoria');

            //Guardar al servicio
            $categoria -> save();
            DB::commit();
            $exito = true;
        }catch(Exception $ex){
            DB::rollback();
            $exito = false;
        }
       return $exito;
    }
}
