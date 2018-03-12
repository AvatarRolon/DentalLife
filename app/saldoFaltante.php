<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saldoFaltante extends Model
{
    protected $fillable = [
        'saldo',
        'abono_id',
        'estadoCuenta_id'
    ];
}
