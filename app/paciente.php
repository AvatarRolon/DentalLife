<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable = [
        'CURP',
        'nombre',
        'apPat',
        'apMat',
        'RFC',
        'telefono',
        'email',
        'edad',
        'fechaNac',
        'sexo',
        'numCasa',
        'calle',
        'colonia',
        'ocupacion',
        'fechaIngreso',
        'foto'
    ];
}
