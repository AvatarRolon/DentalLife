<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class catalogoServicio extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombre' => 'required|string|max:30',
            'costo' => 'required',
            'categoriaServ_id' => 'required'
        ];
    }

     public function messages()
    {
        return [
            //Mensajes de error para el campo nombre 
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.max' => 'El campo nombre debe tener máximo 30 carácteres',

            //Mensajes de error para el campo costo
            'costo.required' => 'El campo costo es requerido',

            //Mensajes de error para el campo categoriaServ_id
            'categoriaServ_id.required' => 'Necesita seleccionar una opción',
        ];
    }
}
