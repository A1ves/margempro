<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|min:6|max:60',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Ei! Esqueceu de digitar seu e-mail',
            'email.email' => 'Hmm… isso não parece um e-mail de verdade',
            'password.required' => 'Cadê a senha?',
            'password.min' => 'Sua senha é muito curta! Use pelo menos 6 caracteres',
            'password.max' => 'Calma lá! Sua senha passou do limite (máx. 60 caracteres)',
        ];

    }
}
