<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aportaciones extends Model
{
    protected $table ='aportaciones';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'aportaciones',
        'profesores_codigo'
    ];
}
