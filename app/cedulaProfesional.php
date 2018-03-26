<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cedulaProfesional extends Model
{
    protected $fillable = [
        'profesion',
        'anioExpedicion',
        'institucion',
        'tipo',
        'medico_id'
    ];
}
