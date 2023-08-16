<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            "email" => "required|email",
            "password" => "required|min:3|max:6",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "Email không được để trống",
            "email.email" => "Email không hợp lệ",
            "password.required" => "Password không được để trống",
            "password.min" => "Password tối thiểu là 3 ký tự",
            "password.max" => "Password tối đa là 6 ký tự",
        ];
    }
}
