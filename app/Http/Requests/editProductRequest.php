<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class editProductRequest extends Request
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
            
            'url' => 'required|unique:products,url,'.$this->id,
            'url' => 'required|unique:blogs,url',
            'url' => 'required|unique:categories,url',
            'name' => 'required',
            'price'=> 'required',
            'title' =>'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'image'=>'image|mimes:jpg,png,gif,jpeg',
            'image1'=>'image|mimes:jpg,png,gif,jpeg',
            'image2'=>'image|mimes:jpg,png,gif,jpeg',
            'image3'=>'image|mimes:jpg,png,gif,jpeg'
        ];
    }
    public function messages(){
        return [
            'url.required' => 'Vui lòng nhập Url',
            'url.unique' => 'Url này đã được sử dụng',
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'price.required'=> 'Vui lòng nhập giá',
            'title.required' =>' Vui lòng nhập tiêu đề danh mục',
            'seo_keyword.required'=>'Vui lòng nhập seo keywords',
            'seo_description.required'=>'Vui lòng nhập seo description',
            'image.image' =>'Định dạng ảnh đại diện không đúng',
            'image.mimes' => 'Định dạng ảnh đại diện không đúng',
            'image1.image' =>'Định dạng ảnh 2 không đúng',
            'image1.mimes' => 'Định dạng ảnh 2 không đúng',
            'image2.image' =>'Định dạng ảnh 3 không đúng',
            'image2.mimes' => 'Định dạng ảnh 3 không đúng',
            'image3.image' =>'Định dạng ảnh 4 không đúng',
            'image3.mimes' => 'Định dạng ảnh 4 không đúng'
        ];
    }
}
