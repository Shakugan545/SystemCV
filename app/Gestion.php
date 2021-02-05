<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table ='gestion_academicas';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'institucion',
        'puesto',
        'inicio',
        'fin',
        'profesores_codigo'
    ];
}
