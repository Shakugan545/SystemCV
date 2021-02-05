<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpNoAcademicaEditRequest extends FormRequest
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
            'profesores_codigo'                 => 'required|numeric|exists:profesores,codigo',
            'institucion'                       => 'required|max:90',
            'act_o_puesto'                      => 'required|regex:/^[\pL\s\-]+$/u|max:90',
            'inicio'                            => 'required',
            'fin'                               => 'required',
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numerico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'institucion.required'                  => 'El campo Institución es obligatorio   ',
            'institucion.max'                       => 'El campo Institución no debe exceder de los 90 caracteres   ',
            'act_o_puesto.required'                 => 'El campo Puesto o Actividad es obligatorio  ',
            'act_o_puesto.regex'                    => 'El campo Puesto o Actividad no debe ser numérico ',
            'act_o_puesto.max'                      => 'El campo Puesto o Actividad no debe exceder de los 90 caracteres   ',
            'inicio.required'                       => 'El campo Inicio es obligatorio  ',
            'fin.required'                          => 'El campo Fin es obligatorio  ',
               
            
        ];
    }
}
