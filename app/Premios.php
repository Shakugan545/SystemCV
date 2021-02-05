<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premios extends Model
{
    protected $table ='premios';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'premios',
        'profesores_codigo'
    ];
}
