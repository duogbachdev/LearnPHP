<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            "namecode" => "required|unique:users",
            "fullname" => "required",
            "address" => "required",
            "class" => "required",
            "gender" => "required",
            "datebirth" => "required",
            "department" => "required",
        ];
    }

    public function messages()
    {
        return [
            "namecode.required" => "Mã sinh viên không được để trống",
            "namecode.unique" => "Mã sinh viên đã tồn tại",
            "fullname.required" => "Họ và tên không được để trống",
            "address.required" => "Địa chỉ không được để trống",
            "class.required" => "Lớp không được để trống",
            "gender.required" => "Giới tính không được để trống",
            "department.required" => "Khoa không được để trống",
            "datebirth.required" => "Ngày sinh không được để trống",
        ];
    }
}
