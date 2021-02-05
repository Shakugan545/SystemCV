<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicaEditRequest extends FormRequest
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
     */
    public function rules()
    {
        return [
            'profesores_codigo'       => 'required|numeric|exists:profesores,codigo|digits_between:0,10',
            'nombre_academica'        => 'required|regex:/^[\pL\s\-]+$/u|max:90',
            'especialidad'            => 'required|regex:/^[\pL\s\-]+$/u|max:40',
            'institucion_A'           => 'required|max:90',
            'cedula'                  => 'required|numeric|digits_between:0,10',
            'ano_obtenido'            => 'required|numeric|digits:4',
            'pais'                    => 'required|regex:/^[\pL\s\-]+$/u|max:40'
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numérico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'nombre_academica.required'             => 'El campo  Grados Académicos es obligatorio',
            'nombre_academica.regex'                => 'El campo  no permite numeros',
            'nombre_academica.max'                  => 'El campo  no puede exceder de 90 caracteres',
            'especialidad.required'                 => 'El campo  especialidad Obligatorio',
            'especialidad.regex'                    => 'El campo  no permite numeros',
            'institucion_A.required'                => 'El campo  Institución Obligatorio',
            'cedula.required'                       => 'El campo  Cedula Obligatorio',
            'cedula.numeric'                        => 'El campo debe ser numérico',
            'cedula.digits_between'                 => 'El campo no puede exceder de 10 digitos',
            'ano_obtenido.required'                 => 'El campo  Año Obligatorio',
            'ano_obtenido.numeric'                  => 'El campo debe ser numérico',
            'ano_obtenido.digits'                   => 'El campo no puede exceder de 4 digitos',
            'pais.required'                         => 'El campo  Pais Obligatorio',
            'pais.regex'                            => 'El campo  no permite numéros',
        ];
    }
}
