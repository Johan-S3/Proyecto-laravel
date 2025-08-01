<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:6'],
            'body' => ["required", 'min:10'],
            'file' => 'required',
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
            'title.required' => 'El :attribute es requerido',
            'title.min' => 'El :attribute requiere minimo 6 caracteres.',
            'body.required' => 'El :attribute es requerido',
            'body.min' => 'El :attribute requiere minimo 10 caracteres.',
            'file.required' => 'La :attribute es requerida',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'Titulo',
            'body' => 'Contenido',
            'file' => 'Imagen',
        ];
    }
}
