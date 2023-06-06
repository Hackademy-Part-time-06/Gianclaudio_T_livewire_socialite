<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
            "name" => "required|string",
            "surname" => "required|string",
            "dateofbirth" => "required|string",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Deve essere obbligatorio',
            'name.string' => 'Deve essere di tipo stringa',
            'surname.required' => 'Deve essere obbligatorio',
            'surname.string' => 'Deve essere di tipo stringa',
            'name.max' => 'Deve essere di almeno 25 caratteri',
            'surname.max' => 'Deve essere di almeno 25 caratteri',
            'dateofbirth.required' => 'Data di nascita deve essere obbligatorio',
            
        ];
    }
}
