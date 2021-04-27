<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackEndProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten_san_pham' => 'required',
            'sku' => 'required',
            'so_luong' => 'required|integer|min:1',
            'gia_san_pham' => 'required|numeric|min:50000',
            'category_id' => 'required',
            'image' => 'required|image:png,jpg,jpeg|max:10000'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'category_id.required' => 'Thể loại bắt buộc nhập',
            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc nhập',
            'sku.required' => 'Nhập mã sku',
            'image.required' => 'Hình ảnh bắt buộc nhập',
            'image.image' => 'Hình ảnh bắt buộc phải là png, jpg,jpeg',
            'so_luong.required' => 'Bạn phải nhập số lượng',
            'so_luong.integer' => 'Số lượng phải là kiểu số',
            'gia_san_pham.required' => 'Bạn phải nhập giá sản phẩm',
            'gia_san_pham.numeric' => 'Giá sản phẩm phải là kiểu số'
        ];
    }
}
