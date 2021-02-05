<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinasAddRequest extends FormRequest
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
        'profesores_codigo'                 => 'required|numeric|exists:profesores,codigo|digits_between:0,11',
        'institucion'                       => 'required|max:90',
        'actividad'                         => 'required|max:40|regex:/^[\pL\s\-]+$/u',
        'horas'                             => 'required|digits_between:0,3|numeric',
        'ano'                               => 'required|digits:4',
        'pais'                              => 'required|regex:/^[\pL\s\-]+$/u',
    ];
}
public function messages()  
{
    return[
        'profesores_codigo.required'            => 'El código es Obligatorio',
        'profesores_codigo.numeric'             => 'El código debe ser numérico',
        'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
        'profesores_codigo.digits_between'      => 'El código no puede exceder los 11 digitos',
        'institucion.required'                  => 'El campo Institución es obligatorio   ',
        'institucion.max'                       => 'El campo Institución no puede superar los 90 caracteres',
        'actividad.required'                    => 'El campo Actividad es obligatorio  ',
        'actividad.max'                         => 'El campo Actividad no puedo superar los 40 caracteres  ',
        'actividad.regex'                       => 'El campo Actividad no debe ser numérico',
        'horas.required'                        => 'El campo Horas es obligatorio  ',
        'horas.digits_between'                  => 'El campo Horas no debe exceder los 3 digitos  ',
        'horas.numeric'                         => 'El campo Horas debe ser numérico  ',
        'ano.required'                          => 'El campo Año es obligatorio  ',
        'ano.digits'                            => 'El campo Año solo acepta 4 digitos  ',
        'pais.required'                         => 'El campo Pais es obligatorio  ',
        'pais.regex'                            => 'El campo Pais no debe ser numérico ',
        
    ];
}
}


