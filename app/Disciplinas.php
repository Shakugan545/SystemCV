<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    protected $table = 'disciplinas';
    public $timestamps = false;
    
    protected $fillable =[
        'id',
        'institucion',
        'actividad',
        'horas',
        'ano',
        'pais',
        'profesores_codigo'

    ];

    
}
