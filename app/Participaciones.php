<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participaciones extends Model
{
    protected $table = 'participaciones';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'organismo',
        'tiempo_membresia',
        'lvl_participacion',
        'profesores_codigo'
    ];
}
