<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class editProductRepairRequest extends Request
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
            
            'name' => 'required',
            'phone_number' =>'required',
            'address'=>'required',
            'product_name'=>'required',
            'error'=>'required'
        ];
    }
    public function messages(){
        return [
            
            
            'name.required' => 'Vui lòng nhập tên khách hàng',
            'phone_number.required' =>' Vui lòng nhập số điện thoại khách hàng',
            'address.required'=>'Vui lòng nhập seo địa chỉ khách hàng',
            'product_name.required'=>'Vui lòng nhập tên sản phẩm sửa chữa',
            'error.required' =>'Vui lòng nhập lỗi sản phẩm sửa chữa'
            
        ];
    }
}
