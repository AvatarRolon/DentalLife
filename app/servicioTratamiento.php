<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicioTratamiento extends Model
{
    protected $fillable = [
        'fechaI',
        'fechaF',
        'estado',
        'servicio_id',
        'tratamiento_id'
    ];
}
