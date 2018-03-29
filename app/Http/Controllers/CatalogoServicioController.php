<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\catalogoServicio;
use App\servicio;
use App\categoriaServicio;
use Alert;

class CatalogoServicioController extends Controller
{
    //
    public function index()
    {   
        //Ir al menu del catálogo de servicios 
        $categorias= categoriaServicio::get();
        $servicios=servicio::get();
        
       for ($i=0; $i<count($categorias); $i++){
            $catalogo[$i] = [
                "categoria" =>$categorias[$i]->nombre,
                "serv" =>servicio::where('categoriaServ_id', '=', $categorias[$i]->id)->get(['id','nombre','costo']),
            ];
        }
     //return $catalogo[0]['categorias']['serv'][0];
      //  return count($catalogo[0]['serv']);
       
        return view('catalogoServicio.index')
        ->with('categorias', $categorias)
        ->with('servicios', $servicios)
        ->with('catalogo', $catalogo)
        ;
        
    }
    
    public function create()
    {
        //Ir a la vista para crear un servicio. 
        $categorias = categoriaServicio::get();
        return view('catalogoServicio.create')->with('categorias', $categorias);
    }

    public function store(catalogoServicio $request)
    {
        //Almacenar en la BD el servicio creado 
        $booleanCreate= servicio::nuevoServicio($request);
        if($booleanCreate){
            //Mensaje de Sweet Alert de éxito
            Alert::message('El servicio ha sido registado con éxito', 'Éxito')->persistent('Cerrar');
            return redirect()->route('catalogoServicio.index');
        }else{
            //Mensaje de Sweet Alert de error
            alert()->error('Ocurrio un error y los datos no fueron almacenados :(','Error inesperado');
            return redirect()->route('catalogoServicio.index');
        }   
    }

    public function show($id)
    {
        //Ver un servicio en especifico
        $servicio = servicio::findOrFail($id);
        return "show";
    }

    public function edit($id)
    {
        //Ir a la vista donde puedes editar un servicio en especifico 
        $servicios = servicio::findOrFail($id);
        $categorias= categoriaServicio::get();
        
        return view('catalogoServicio.edit')
        ->with('categorias', $categorias)
        ->with('servicios', $servicios)
        ;
    }

    public function update(catalogoServicio $request, $id)
    {
        //Almacenar en la BD el servicio editado
        $booleanCreate= servicio::updateServicio($request,$id);
        if($booleanCreate){
            //Mensaje de Sweet Alert de éxito
            Alert::message('El servicio fue modificado con éxito', 'Éxito')->persistent('Cerrar');
            return redirect()->route('catalogoServicio.index');
        }else{
            //Mensaje de Sweet Alert de error
            alert()->error('Ocurrio un error y los datos no fueron modificados :(','Error inesperado');
            return redirect()->route('catalogoServicio.index');
        }
    }

    public function destroy($id)
    {
        //Eliminar un servicio en especifico 
        $booleanDelete =  servicio::deleteServicio($id);
        if($booleanDelete){
            alert()->success('El servicio ha sido eliminado con éxito','Éxito');
        }else{
            alert()->error('No hemos podido eliminar el servicio :(','Error inesperado');
        }
        return redirect()->route('catalogoServicio.index');
    }
}
