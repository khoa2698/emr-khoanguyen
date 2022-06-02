<?php

namespace App\Http\Requests\emr\account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreAccountRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email','unique:users,email,'. $this->id .',id'],
            'password' => ['required', 'confirmed', 
                            Password::min(8)->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
            ],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Tên là bắt buộc',
    //         'name.max' => 'Tên không quá 255 ký tự',
    //         'email.required' => 'Địa chỉ email là bắt buộc',
    //         'email.unique' => 'Địa chỉ email đã tồn tại',
    //         'password.required' => 'Mật khẩu là bắt buộc',
    //         'password.confirmed' => 'Mật khẩu nhập lại không khớp',
    //         'password.min' => "Mật khẩu ít nhất 8 ký tự"
    //     ];
    // }
}
