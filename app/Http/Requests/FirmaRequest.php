<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirmaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "firma_unvan" => "required|max:255",
            "firma_name" => "required|max:255",
            "firma_gsm" => "required|max:255",
            "firma_email" => "required|email",
        ];
    }

    public function messages()
    {
        return [
            "firma_unvan.required" => "Firma Unvan  required",
            "firma_unvan.max" => "Firma Unvan for can enter up to 255 characters",
            "firma_name.required" => "Firma Name required",
            "firma_name.max" => "Firma Name for can enter up to 255 characters",
            "firma_gsm.required" => "Firma GSM  required",
            "firma_gsm.max" => "Firma GSM for can enter up to 255 characters",
            "firma_email.required" => "Firma Email, must be in email format",
        ];
    }
}
