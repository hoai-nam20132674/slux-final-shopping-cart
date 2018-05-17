<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addOrderRequest extends Request
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
            'phone_number' => 'required',
            'address' => 'required',
        ];
    }
    public function messages(){
        return [
            
            
            'name.required' => 'Vui lòng nhập họ tên',
            'phone_number.required' => 'Vui lòng nhập số điện thoại để được liên hệ giao hoàng',
            'address.required' =>' Vui lòng nhập địa chỉ',
        ];
    }
}
