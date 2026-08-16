<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'date' => ['required', 'date', 'after_or_equal:today'],
 
            'reason' => ['required', 'string', 'max:255'],

            'time' => ['required', 'string', 'max:10'],
 
            'firstname' => ['required', 'string', 'max:255'],
 
            'lastname' => ['required', 'string', 'max:255'],
 
            'email' => ['required', 'email', 'max:255'],
 
            'phone' => ['required', 'string', 'max:30'],
 
            'message' => ['nullable', 'string', 'max:5000'],
        ];
    }
 
    public function messages(): array
    {
        return [
            'date.required' => 'Veuillez sélectionner une date pour votre rendez-vous.',
            'date.date' => 'La date sélectionnée n\'est pas valide.',
            'date.after_or_equal' => 'La date sélectionnée ne peut pas être antérieure à aujourd\'hui.',
 
            'time.required' => 'Veuillez choisir une heure pour votre rendez-vous.',
 
            'reason.required' => 'Veuillez sélectionner le motif de votre rendez-vous.',
 
            'firstname.required' => 'Veuillez renseigner votre prénom.',
            'firstname.max' => 'Votre prénom ne peut pas dépasser 255 caractères.',
 
            'lastname.required' => 'Veuillez renseigner votre nom.',
            'lastname.max' => 'Votre nom ne peut pas dépasser 255 caractères.',
 
            'email.required' => 'Veuillez renseigner votre adresse email.',
            'email.email' => 'Veuillez renseigner une adresse email valide.',
 
            'phone.required' => 'Veuillez renseigner votre numéro de téléphone.',
            'phone.max' => 'Votre numéro de téléphone ne peut pas dépasser 30 caractères.',
 
            'message.max' => 'Votre message ne peut pas dépasser 5000 caractères.',
        ];
    }
}
