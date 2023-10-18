<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AgentFormRequest extends FormRequest
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
            'name'=>['required', 'min:4'],
            'email' => ['required', 'email', 'min:4'],
            'phone_number'=>['required', 'min:4'],
            'bio'=>['required', 'min:4'],
            'image'=>['image', 'max:2000']
        ];
    }
}
