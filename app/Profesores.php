<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = 'profesores';
    public $timestamps = false;
    protected $primaryKey = 'codigo'; 
    protected $fillable =[
        'codigo',
        'nombre',
        'ap',
        'am',
        'fecha_nacimiento',
        'edad',
        'puesto',
        'antiguedad',
        
        
    ];


    public function academica(){
        return $this->hasMany(Academica::class,'profesores_codigo');
    }

    public function capacitaciones(){
        return $this->hasMany(Capacitaciones::class,'capacitaciones_id');
        
    }
   
   
}
