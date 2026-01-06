<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|max:60|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ei… o nome ficou pra depois?',
            'name.max' => 'Tudo isso de nome? Vamos encurtar um pouco.',

            'email.required' => 'Sem e-mail não tem conversa.',
            'email.email' => 'Esse e-mail aí tá meio estranho, confere ele.',
            'email.max' => 'Esse e-mail tá tentando quebrar recorde de tamanho?',
            'email.unique' => 'Esse e-mail já passou por aqui antes.',

            'password.required' => 'Cadê a senha? Ela é importante.',
            'password.min' => 'Essa senha tá curtinha demais, capricha.',
            'password.max' => 'Senha grande assim já vira testamento.',
            'password.confirmed' => 'As senhas não se entenderam, tenta de novo.',
        ];
    }
}
