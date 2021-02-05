<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipacionesEditRequest extends FormRequest
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
            'organismo'                         => 'required|max:99',
            'tiempo_membresia'                  => 'required|digits:2',
            'lvl_participacion'                 => 'required|max:40|regex:/^[\pL\s\-]+$/u',
            
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numérico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'organismo.required'                    => 'El campo Institución es obligatorio   ',
            'organismo.max'                         => 'El campo Institución no debe exceder de los 99 caracteres  ',
            'tiempo_membresia.required'             => 'El campo Membresia es obligatorio  ',
            'tiempo_membresia.digits'               => 'El campo Membresia no debe de exceder de 2 digitos  ',
            'lvl_participacion.required'            => 'El campo Nivel De Participación es obligatorio  ',
            'lvl_participacion.max'                 => 'El campo Nivel De Participación no debe de exceder de 40 caracteres  ',
            'lvl_participacion.regex'               => 'El campo Nivel De Participación no debe ser numérico  ',
        ];
    }
}
