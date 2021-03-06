<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
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
        'fechaIngreso',
        'foto'
    ];
}
