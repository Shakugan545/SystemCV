<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngenierilesEditRequest extends FormRequest
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
            'organismo'                         => 'required|max:90',
            'experiencia'                       => 'required|max:40|regex:/^[\pL\s\-]+$/u',
            'anos'                              => 'required|numeric|digits:2',
            
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numérico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'organismo.required'                    => 'El campo Organismo es obligatorio   ',
            'organismo.max'                         => 'El campo Organismo no debe de exceder los 90 caracteres  ',
            'experiencia.required'                  => 'El campo Experiencia es obligatorio  ',
            'experiencia.max'                       => 'El campo Experiencia no debe de exceder los 40 caracteres  ',
            'experiencia.regex'                     => 'El campo Experiencia no debe ser numérico',
            'anos.required'                         => 'El campo Años es obligatorio  ',
            'anos.numeric'                          => 'El campo Años debe ser numérico  ',
            'anos.digits'                           => 'El campo Años no debe exceder de los 2 digitos  ',
            
               
            
        ];
    }
}
