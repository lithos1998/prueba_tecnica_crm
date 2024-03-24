<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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

    // Reglas de validacion
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|numeric|digits:2|gte:10',
            'phone' => 'required|numeric',
            'status' => 'required'
        ];
    }

    
    // Mensajes de error
    public function messages(): array
    {
        return [
            'name.required' => 'Campo nombre es obligatoio',
            'email.required' => 'Campo email es obligatoio',
            'email.email' => 'El formato de email no es valido',
            'email.unique' => 'Este mail ya se encuentra registrado',
            'age.required' => 'Campo edad es obligatorio',
            'age.numeric' => 'La edad debe ser un numero',
            'age.digits' => 'La edad no es valida',
            'age.gte' => 'El cliente debe ser mayor de edad',
            'phone.required' => 'Campo telefono es obligatorio',
            'phone.numeric' => 'La edad debe ser un numero'
        ];
    }
}
