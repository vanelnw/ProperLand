<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormRequest extends FormRequest
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
            'lastname'=> ['required','string'],
            'firstname'=> ['required','string'],
            'email'=> ['required','email','min:8'],
            'phone'=> ['required', 'string', 'min:4'],
            'message'=> ['required', 'min:8'],
        ];
    }
}
