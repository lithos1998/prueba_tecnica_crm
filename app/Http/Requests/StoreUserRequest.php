<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|email|unique:users|max:255',
            'password' => ['required',  Password::min(8)]
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
            'password.required' => 'Campo contraseña es obligatoio',
        ];
    }
}
