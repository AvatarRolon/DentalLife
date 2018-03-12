<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamiento extends Model
{
    protected $fillable = [
        'numeroCuenta',
        'nombre',
        'fechaI',
        'fechaF',
        'total',
        'paciente_id',
        'medico_id',
        'historiaClinica_id'
    ];
}
