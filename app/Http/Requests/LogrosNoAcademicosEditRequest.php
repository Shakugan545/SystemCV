<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogrosNoAcademicosEditRequest extends FormRequest
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
            'profesores_codigo'      => 'required|numeric|exists:profesores,codigo',
            'logro'                  => 'required|regex:/^[\pL\s\-]+$/u|max:95',
            'autores'                => 'required|regex:/^[\pL\s\-]+$/u|max:95',
            'relevancia'             => 'required|regex:/^[\pL\s\-]+$/u|max:95',
            'lugar'                  => 'required|regex:/^[\pL\s\-]+$/u|max:40',

           
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El Código es Obligatorio',
            'profesores_codigo.numeric'             => 'El Código debe ser numérico',
            'profesores_codigo.exists'              => 'El Codigo del profesor no existe en la base de datos',
            'logro.required'                        => 'El campo Logro es Obligatorio',
            'logro.regex'                           => 'El campo Logro no debe ser numérico',
            'logro.max'                             => 'El campo Logro no debe de exceder de los 90 caracteres',
            'autores.required'                      => 'El campo Autores es Obligatorio',
            'autores.regex'                         => 'El campo Autores no debe ser numérico',
            'autores.max'                           => 'El campo Autores no debe de exceder de los 90 caracteres',
            'relevancia.required'                   => 'El campo Relevancia es Obligatorio',
            'relevancia.regex'                      => 'El campo Relevancia no debe ser numérico',
            'relevancia.max'                        => 'El campo Relevancia no debe de exceder de los 90 caracteres',
            'lugar.required'                        => 'El campo Lugar o Pais es Obligatorio',
            'lugar.regex'                           => 'El campo Lugar no debe ser numérico',
            'lugar.max'                             => 'El campo Lugar no debe de exceder de los 40 caracteres',
        ];
    }
}
