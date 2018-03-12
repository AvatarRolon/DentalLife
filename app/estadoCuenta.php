<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estadoCuenta extends Model
{
     protected $fillable = [
        'total',
        'estado',
        'paciente_id'
    ];
}
