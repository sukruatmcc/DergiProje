<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DergiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "dergi_name" => "required|max:255",
            "dergi_number" => "required"
        ];
    }

    public function messages()//hataları özelleştirme
    {
        return [
            "dergi_name.required" => "Dergi Name  required",
            "dergi_name.max" => "Dergi Name for can enter up to 255 characters",
            "dergi_number.reuqired" => "Dergi Number required",
        ];
    }
}
