<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estadoCuenta extends Model
{
    protected $fillable = [
        'total',
        'paciente_id'
    ];
}
