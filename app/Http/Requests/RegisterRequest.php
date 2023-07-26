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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // Валидация на регистрацию пользователя
        //имя строка максимум 255 символов обязательное поле
        //почта уникальная обязательное поле
        //телефон уникальный обязательный для заполнения и с маской +7 и 10 цифр
        // пароль миимум 6 и обязательное символов, строчная, заглавная, цифра и спец символ.
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|unique:users|regex:/^\+7[0-9]{10}$/',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$%&!:])[a-zA-Z0-9$%&!:]+$/',
        ];
    }
}
