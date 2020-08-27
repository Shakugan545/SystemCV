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
            'codigo'            => 'required',
            'nombre'            => 'required',
            'ap'                => 'required',
            'am'                => 'required',
            'fecha_nacimiento'  => 'required',
            'edad'              => 'required',
            'puesto'            => 'required',
            'antiguedad'        => 'required'
        ];
    }
    public function messages()
    {
        return[
            'codigo.required'            => 'El codigo es Obligatorio',
            'nombre.required'            => 'El campo  Nombre Obligatorio',
            'ap.required'                => 'El campo  Apellido Paterno Obligatorio',
            'am.required'                => 'El campo  Apellido Materno Obligatorio',
            'fecha_nacimiento.required'  => 'El campo  Fecha de nacimiento Obligatorio',
            'edad.required'              => 'El campo  Edad Obligatorio',
            'puesto.required'            => 'El campo  Puesto Obligatorio',
            'antiguedad.required'        => 'El campo  Antiguedad Obligatorio'
        ];
    }
}
