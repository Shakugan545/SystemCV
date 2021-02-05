<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PremiosEditRequest extends FormRequest
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
            'premios'           => 'required',
           
        ];
    }
    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numerico',
            'profesores_codigo.exists'              => 'El Codigo del profesor no existe en la base de datos',
            'premios.required'                  => 'El campo aportaciones es obligatorio',
           
            
        ];
    }
}
