<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginUserRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password' => 'required'
        ];
    }

    
    // Mensajes de error
    public function messages(): array
    {
        return [
            'email.required' => 'Campo email es obligatoio',
            'email.email' => 'El formato de email no es valido',
            'password.required' => 'Campo contraseña es obligatoio',
        ];
    }
}
