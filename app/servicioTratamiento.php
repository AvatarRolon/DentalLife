<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicioTratamiento extends Model
{
    protected $fillable = [
        'servicio_id',
        'tratamiento_id'
    ];
}
