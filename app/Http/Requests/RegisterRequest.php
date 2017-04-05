<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname' => 'min:6|max:50',
            'username' => 'min:5|max:30',
            'password' => 'min:6|max:50',
            'email' => 'unique:users,email|email',
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
            'fullname.min' => 'Nhap it nhat 6 ky tu',
            'fullname.max' => 'Nhap nhieu nhat 30 ky tu',
            'username.min' => 'Nhap it nhat 6 ky tu',
            'username.max' => 'Nhap nhieu nhat 30 ky tu',
            'password.min' => 'Nhap it nhat 6 ky tu',
            'password.max' => 'Nhap nhieu nhat 30 ky tu',
            'email.unique' => 'Email da ton tai',
        ];
    }
}
