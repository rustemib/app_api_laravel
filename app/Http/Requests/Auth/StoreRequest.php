<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|regex:/^\+7[0-9]{10}$/|unique:users',
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[\$%&!:\.]/'
            ],
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'Телефон должен удовлетворять маске: начинаться с +7, после чего идет 10 цифр.',
            'password.regex' => 'Пароль должен содержать минимум 6 символов, только латиница, минимум 1 символ верхнего регистра, минимум 1 символ нижнего регистра, минимум 1 спец символ $%&!:.'
        ];
    }

}
