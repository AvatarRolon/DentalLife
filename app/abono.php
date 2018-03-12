<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abono extends Model
{
    protected $fillable = [
        'fecha',
        'cantidad',
        'servicio_id',
        'paciente_id',
        'estadoCuenta_id'
    ];
}
