<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    protected $fillable = [
        'fecha',
        'horaI',
        'horaF',
        'estado',
        'paciente_id',
        'medico_id',
        'historiaClinica_id'
    ];
}
