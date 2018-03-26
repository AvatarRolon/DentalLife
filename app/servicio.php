<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $fillable = [
        'nombre',
        'costo',
        'categoriaServ_id'
    ];
}
