<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'unique:cats,name',
        ];
    }

    /**
     * Check error request messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique' => 'Tên danh mục đã tồn tại',
        ];
    }
}
