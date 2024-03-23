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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required',
            'phone' => 'required',
            'status' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Campo nombre es obligatoio',
            'email.required' => 'Campo email es obligatoio',
            'email.email' => 'El formato de email no es valido',
            'email.unique' => 'Este mail ya se encuentra registrado',
            'age.required' => 'Campo edad es obligatorio',
            'phone.required' => 'Campo telefono es obligatorio'
        ];
    }
}
