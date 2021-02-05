<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingenieriles extends Model
{
    protected $table = 'ingenieriles';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'organismo',
        'experiencia',
        'anos',
        'profesores_codigo'
    ];
}
