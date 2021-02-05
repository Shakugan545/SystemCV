<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapacitacionesAddRequest extends FormRequest
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
            'tipo_capacitacion'                 => 'required|regex:/^[\pL\s\-]+$/u|max:90',
            'institucion_C'                     => 'required|max:90',
            'horas'                             => 'required|numeric|digits_between:0,3',
            'ano_obtenido_capacitacion'         => 'required|numeric|digits:4',
            'pais_capacitacion'                 => 'required|regex:/^[\pL\s\-]+$/u|max:40',
        ];
    }
    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numérico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'profesores_codigo.digits_between'      => 'El código no puede exceder 11 digitos',
            'tipo_capacitacion.required'            => 'El campo Capacitación es obligatorio ',
            'tipo_capacitacion.regex'               => 'El campo nombre no acepta valores numérico ',
            'tipo_capacitacion.max'                 => 'El campo no puede exceder los 90 caracteres ',
            'institucion_C.required'                => 'El campo Institución es obligatorio  ',
            'institucion_C.max'                     => 'El campo no puede exceder los 90 caracteres ',
            'horas.required'                        => 'El campo Horas es obligatorio  ',
            'horas.numeric'                         => 'El campo horas debe ser numérico',
            'horas.digits_between'                  => 'El campo horas no debe exceder los 3 digitos',
            'ano_obtenido_capacitacion.required'    => 'El campo Año es obligatorio  ',
            'ano_obtenido_capacitacion.numeric'     => 'El campo Año debe ser numérico',
            'ano_obtenido_capacitacion.digits'      => 'El campo Año solo acepta 4 digitos',
            'pais_capacitacion.required'            => 'El campo Pais es obligatorio',
            'pais_capacitacion.regex'               => 'El campo Pais no acepta valores numérico',
            
        ];
    }
}
