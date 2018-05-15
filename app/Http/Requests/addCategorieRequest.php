<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addCategorieRequest extends Request
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
            
            'url' => 'required|unique:categories,url',
            'url' => 'required|unique:blogs,url',
            'url' => 'required|unique:products,url',
            'name' => 'required|unique:categories,name',
            'title' =>'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
 

        ];
    }
    public function messages(){
        return [
            
            
            'url.required' => 'Vui lòng nhập Url',
            'url.unique' => 'Url này đã được sử dụng',
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.unique' => 'Tên danh mục này đã được sử dụng',
            'title.required' =>' Vui lòng nhập tiêu đề danh mục',
            'seo_keyword.required'=>'Vui lòng nhập seo keywords',
            'seo_description.required'=>'Vui lòng nhập seo description',
            
        ];
    }
}
