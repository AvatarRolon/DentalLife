<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPaciente extends FormRequest
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
            'CURP' => 'required|string|min:18|max:18',  
            'nombre' => 'required|string|max:30',
            'appat' => 'required|string|max:20',
            'apmat' => 'nullable|string|max:20',
            'RFC' => 'nullable|string|min:13|max:13',
            'ocupacion' => 'required|string|max:25',
            'fechaNac' => 'required|date',
            'sexo' => 'required',
            'telefono' => 'nullable|min:10|max:10',
            'email' => 'nullable|email|max:50',
            'colonia' => 'required|string|max:25',
            'calle' => 'required|string|max:50',
            'numCasa' => 'required|string|max:4'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
    */
    public function messages()
    {
        return [
            //Mensajes de error para el campo CURP
            'CURP.required' => 'El campo CURP es requerido',
            'CURP.min' => 'El campo CURP debe tener 18 carácteres',
            'CURP.max' => 'El campo CURP debe tener 18 carácteres',

            //Mensajes de error para el campo nombre 
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.max' => 'El campo nombre debe tener máximo 30 carácteres',

            //Mensajes de error para el campo appat
            'appat.required' => 'El apellido paterno es requerido',
            'appat.max' => 'El apellido paterno debe tener máximo 20 carácteres',

            //Mensajes de error para el campo apmat
            'apmat.required' => 'El apellido paterno es requerido',
            'apmat.max' => 'El apellido paterno debe tener máximo 20 carácteres',

            //Mensajes de error para el campo RFC
            'RFC.min' => 'El campo RFC debe tener 13 carácteres',
            'RFC.max' => 'El campo RFC debe tener 13 carácteres',

            //Mensajes de error para el campo ocupacion
            'ocupacion.required' => 'El campo ocupacion es requerido',
            'ocupacion.max' => 'La ocupación debe tener máximo 25 carácteres',

            //Mensajes de error para el campo fechaNac
            'fechaNac.required' => 'La fecha de nacimiento es requerida',
            'fechaNac.date' => 'La fecha de nacimiento debe ser del tipo fecha (DD/MM/AAAA)',

            //Mensajes de error para el campo sexo
            'sexo' => 'El sexo del paciente es requerido',

            //Mensajes de error para el campo telefono
            'telefono.min' => 'El campo telefono debe tener 10 números',
            'telefono.max' => 'El campo telefono debe tener 10 números',

            //Mensajes de error para el campo email
            'email.email' => 'El email debe tener el formato ejemplo@mail.com',
            'email.max' => 'El email debe tener un máximo de 50 carácteres',

            //Mensajes de error para el campo colonia
            'colonia.required' => 'El campo colonia es requerido',
            'colonia.max' => 'La colonia debe tener un máximo de 25 carácteres',

            //Mensajes de error para el campo calle
            'calle.required' => 'El campo calle es requerido',
            'calle.max' => 'Las calles deben tener un máximo de 50 carácteres',

            //Mensajes de error para el campo numCasa
            'numCasa.required' => 'El número de casa es requerido',
            'numCasa.max' => 'El número de casa es requerido'
        ];
    }
}
