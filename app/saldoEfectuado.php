<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saldoEfectuado extends Model
{
    protected $fillable = [
        'monto',
        'abono_id',
        'estadoCuenta_id'
    ];
}
