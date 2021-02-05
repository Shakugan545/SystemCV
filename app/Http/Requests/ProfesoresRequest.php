<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 
  
     */
    public function rules()
    {
        return [
            'codigo'            => 'required|numeric|digits_between:0,11',
            'nombre'            => 'required|regex:/^[\pL\s\-]+$/u|max:45',
            'ap'                => 'required|regex:/^[\pL\s\-]+$/u|max:45',
            'am'                => 'required|regex:/^[\pL\s\-]+$/u|max:45',
            'fecha_nacimiento'  => 'required',
            'edad'              => 'required|numeric|digits_between:0,2',
            'puesto'            => 'required|regex:/^[\pL\s\-]+$/u|max:45',
            'antiguedad'        => 'required|max:45'
        ];
    }
    public function messages()  
    {
        return[
            'codigo.required'            => 'El código es Obligatorio',
            'codigo.numeric'             => 'El código debe ser númerico',
            'codigo.unique'              => 'El código ya existe',
            'codigo.digits_between'      => 'El código no puede ser mayor a 11 digitos',
            'nombre.required'            => 'El campo Nombre es Obligatorio',
            'nombre.regex'               => 'El campo Nombre no permite números',
            'nombre.max'                 => 'El campo Actividad no puedo superar los 45 caracteres  ',
            'ap.required'                => 'El campo  Apellido Paterno Obligatorio',
            'ap.regex'                   => 'El campo  Apellido  no permite números',
            'ap.max'                     => 'El campo Actividad no puedo superar los 45 caracteres  ',
            'am.required'                => 'El campo  Apellido Materno Obligatorio',
            'am.regex'                   => 'El campo  Apellido no permite números',
            'am.max'                     => 'El campo Actividad no puedo superar los 45 caracteres  ',
            'fecha_nacimiento.required'  => 'El campo  Fecha de nacimiento Obligatorio',
            'edad.required'              => 'El campo  Edad Obligatorio',
            'edad.numeric'               => 'El campo  Edad tiene que ser númerico',
            'edad.digits_between'        => 'El campo  Edad no debe exceder los 2 digitos',
            'puesto.required'            => 'El campo  Puesto Obligatorio',
            'puesto.regex'               => 'El campo  puesto no permite números',
            'puesto.max'                 => 'El campo Actividad no puedo superar los 45 caracteres  ',
            'antiguedad.required'        => 'El campo  Antigüedad Obligatorio',
            'antiguedad.max'             => 'El campo Actividad no puedo superar los 45 caracteres  ',
            
        ];
    }
}
