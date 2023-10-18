<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Option;
use App\Models\Agent;

class PropertyFormRequest extends FormRequest
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
            "title" => ['required', 'min:5'],
            "description" => ['required', 'min:5'],
            "surface" => ['required', 'integer', 'min:10'],
            "rooms" => ['required', 'integer', 'min:1'],
            "bedrooms" => ['required', 'integer', 'min:0'],
             "floor" => ['required', 'integer', 'min:0'],
            "bathrooms" => ['required', 'integer', 'min:1'],
            "price" => ['required', 'integer', 'min:0'],
            "city" => ['required', 'min:5'],
            "address" => ['required', 'min:8'],
            "postal_code" => ['required', 'min:3'],
            "for_sale" => ['required', 'boolean'],
            "sold_or_rent" => ['required', 'boolean'],
            //"options" => ['array', 'exists:options.id', 'required']
            "options" => ['array', 'exists:options,id'],
            "agent_id" => ['integer', 'exists:agents,id'],
        ];
    }
}
