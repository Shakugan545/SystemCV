<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitaciones extends Model
{
    protected $table = 'capacitaciones';
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'tipo_capacitacion',
        'institucion_C',
        'horas',
        'ano_obtenido_capacitacion',
        'pais_capacitacion',
        'profesores_codigo'

    ];

    public function profesores(){
        return $this->belongsTo('App\Profesores','profesores_codigo');
    }

    
}
