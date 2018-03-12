<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\medico;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('adminlte::auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {        
        return Validator::make($data, [
            'user' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'CURP' => 'required|max:18',
            'nombre' => 'required|max:30',
            'apPat' => 'required|max:20',
            'apMat' => 'required|max:20',
            'RFC' => 'required|max:13',
            'telefono' => 'required|max:10',
            'email' => 'required|email|max:50',            
            'fechaNac' => 'required',
            'sexo' => 'required',
            'numCasa' => 'required|max:4',
            'calle' => 'required|max:50',
            'colonia' =>'required|max:50'
        ]);
    }    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {        

        ///////////////////////////////////////////////////////////////
        //Variables de fecha de nacimiento
        $fechaNac = explode('-',$data['fechaNac']);
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

        $data['edad'] = $edad;
        $data['fechaIngreso'] = $yearA.'-'.$monthA.'-'.$dayA;
        ////////////////////////////////////////////////////////////
        $email = $data['email'];

        medico::create([
            'CURP' => $data['CURP'],
            'nombre' => $data['nombre'],
            'apPat' => $data['apPat'],
            'apMat' => $data['apMat'],
            'RFC' => $data['RFC'],
            'telefono' => $data['telefono'],
            'email' => $email,
            'fechaNac' => $data['fechaNac'],
            'edad' => $data['edad'],
            'sexo' => $data['sexo'],
            'numCasa' => $data['numCasa'],
            'calle' => $data['calle'],
            'colonia' => $data['colonia'],
            'fechaIngreso' => $data['fechaIngreso']           
        ]);

        $lastId = medico::get(['id']);
        $id_medico = (int) ($lastId -> last() -> id);

        return User::create([
            'user' => $data['user'],
            'email' => $email,
            'id_medico' => $id_medico,            
            'password' => bcrypt($data['password'])
        ]);

    }
}
