<?php

namespace App\Http\Requests\ProductProperty;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'product_id'=>'integer|required',
            'color1'=>'string|nullable',
            'color2'=>'string|nullable',
            'brand'=>'string|nullable'
        ];
    }
}
