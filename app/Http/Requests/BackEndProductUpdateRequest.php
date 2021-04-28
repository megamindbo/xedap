<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackEndProductUpdateRequest extends FormRequest
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
            'nhan_hieu' => 'required'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc nhập',
            'sku.required' => 'Nhập mã sku',
            'so_luong.required' => 'Bạn phải nhập số lượng',
            'so_luong.integer' => 'Số lượng phải là kiểu số',
            'gia_san_pham.required' => 'Bạn phải nhập giá sản phẩm',
            'gia_san_pham.numeric' => 'Giá sản phẩm phải là kiểu số',
            'nhan_hieu.required' => 'Nhãn hiệu bắt buộc nhập'
        ];
    }
}
