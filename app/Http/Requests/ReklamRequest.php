<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReklamRequest extends FormRequest
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
            "reklam_type_name" => "required|max:255",
        ];
    }

    public function messages()
    {
        return [
            "reklam_type_name.required" => "Reklam Type Unvan  required",
            "reklam_type_name.max" => "Reklam Type Unvan for can enter up to 255 characters",
        ];
    }
}
