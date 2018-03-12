<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicioCita extends Model
{
    protected $fillable = [
        'servicio_id',
        'cita_id'
    ];
}
