<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noacademica extends Model
{
    protected $table = 'exp_no_academica';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'institucion',
        'act_o_puesto',
        'inicio',
        'fin',
        'profesores_codigo'
    ];
}
