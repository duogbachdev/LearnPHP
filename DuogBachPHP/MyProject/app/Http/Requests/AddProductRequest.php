<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            "name" => "required",
            "code" => "required|unique:products",
            "price" => "required",
            "image" => "required",
            "info" => "required",
            "describer" => "required",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Tên sản phẩm không được để trống",
            "code.required" => "Mã sản phẩm không được để trống",
            "code.unique" => "Mã sản phẩm đã tồn tại",
            "price.required" => "Giá sản phẩm không được để trống",
            "iamge.required" => "Ảnh sản phẩm không được để trống",
            "info.required" => "Thông tin sản phẩm không được để trống",
            "describer.required" => "Thông tin chi tiết không được để trống",
        ];
    }
}
