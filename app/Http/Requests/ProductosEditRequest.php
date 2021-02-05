<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosEditRequest extends FormRequest
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
            'fecha'                             => 'required',
            'descripcion_productos'             => 'required|max:145',
        ];
    }

    public function messages()  
    {
        return[
            'profesores_codigo.required'            => 'El código es Obligatorio',
            'profesores_codigo.numeric'             => 'El código debe ser numerico',
            'profesores_codigo.exists'              => 'El código del profesor no existe en la base de datos',
            'fecha.required'                        => 'El campo Fecha es obligatorio   ',
            'descripcion_productos.required'        => 'El campo Descripción es obligatorio  ',
            'descripcion_productos.max'             => 'El campo Descripción no debe de exceder los 145 caracteres',
            
            
        ];
    }
}
