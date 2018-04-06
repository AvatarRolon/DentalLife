<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoria extends FormRequest
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
            'nombreCategoria' => 'required|string|max:255'
        ];
    }
    //.......................................................
    public function messages()
    {
        return [
            //Mensajes de error para el campo nombre
            'nombreCategoria.required' => 'El campo nombre categoria es requerido',
            'nombreCategoria.max' => 'El campo nombre categoria debe tener máximo 255 carácteres'
        ];
    }
}
