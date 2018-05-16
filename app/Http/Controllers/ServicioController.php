<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\servicio;
class ServicioController extends Controller
{
     public function getServicios(Request $request, $id){
    	if($request-> ajax()){
    		$servicios= servicio::getServicios($id);
    		return response()->json($servicios);
    	}
    }
}
