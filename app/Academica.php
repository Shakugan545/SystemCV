<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academica extends Model
{
    protected $table = 'academica';
    public $timestamps = false;
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'id',
        'nombre_academica',
        'especialidad',
        'institucion_A',
        'cedula',
        'ano_obtenido',
        'pais',
        'profesores_codigo'

    ];

    public function profesores(){
        return $this->belongsTo('App\Profesores','profesores_codigo');
    }
  
}
