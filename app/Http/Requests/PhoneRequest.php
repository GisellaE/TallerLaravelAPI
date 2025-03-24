<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class PhoneRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'phone_brand' => 'required|string|max:255',
            'phone_model' => 'required|string|max:255',
            'phone_price' => 'required|numeric|min:0',
            'phone_display_size' => 'required|integer|min:1',
            'phone_is_smartphone' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'phone_brand.required' => 'La marca del teléfono es obligatoria.',
            'phone_model.required' => 'El modelo del teléfono es obligatorio.',
            'phone_price.required' => 'El precio del teléfono es obligatorio.',
            'phone_price.numeric' => 'El precio debe ser un número.',
            'phone_display_size.required' => 'El tamaño de pantalla es obligatorio.',
            'phone_display_size.integer' => 'El tamaño de pantalla debe ser un número entero.',
            'phone_is_smartphone.required' => 'Debe indicar si es un smartphone.',
            'phone_is_smartphone.boolean' => 'El campo debe ser verdadero o falso.',
        ];
    }

    // Agregamos esta función para forzar la respuesta en JSON
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response()->json([
            'errors' => $validator->errors()
        ], 422));
    }
}
