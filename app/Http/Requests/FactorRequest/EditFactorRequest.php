<?php

namespace App\Http\Requests\FactorRequest;

use Illuminate\Foundation\Http\FormRequest;

class EditFactorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Description_of_goods' => ['required'],
            'Amount' => ['required'],
        ];
    }
}
