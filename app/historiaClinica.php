<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historiaClinica extends Model
{
    protected $fillable = [
        'paciente_id'
    ];

    public static function getHistoriaClinica($id){        
        $historiaClinica = historiaClinica::findOrFail($id);
        return $historiaClinica;
    }
}
