<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logrosnoacademicos extends Model
{
    protected $table = 'logros_no_academicos';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'logro',
        'autores',
        'relevancia',
        'lugar',
        'profesores_codigo'
    ];
}
