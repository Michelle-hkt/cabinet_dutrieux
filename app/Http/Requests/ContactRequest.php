<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'string','max:255',],
            'lastname' => ['required', 'string','max:255',],

            'email' => [ 'required', 'email','max:255',],

            'phone' => [ 'nullable','string','max:30'],

            'object' => [ 'string','max:255',],

            'message' => [ 'required', 'string', 'max:5000',],
        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'Veuillez renseigner votre prénom.',
            'firstname.max' => 'Votre prénom ne peut pas dépasser 255 caractères.',
            
            'lastname.required' => 'Veuillez renseigner votre nom.',
            'lastname.max' => 'Votre nom ne peut pas dépasser 255 caractères.',

            'email.required' => 'Veuillez renseigner votre adresse email.',
            'email.email' => 'Veuillez renseigner une adresse email valide.',

            'message.required' => 'Veuillez renseigner votre message.',
            'message.max' => 'Votre message ne peut pas dépasser 5000 caractères.',
        ];
    }
}
