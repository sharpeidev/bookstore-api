<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:128',
            'isbn' => 'required|unique:books|numeric|digits:13',
            'value' => 'required|regex:/^\d*(\.\d{2})?$/',
        ];
    }

    /**
     * @param Validator $validator
     * @return void
     */
    public function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'success' => false,
                    'message' => 'Validation errors',
                    'data' => $validator->errors(),
                ]
            )
        );
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'value.required' => 'The value field is required.',
            'value' => 'The value field only accept numeric values with decimal point. Comma or any other character is not permitted',
        ];
    }
}
