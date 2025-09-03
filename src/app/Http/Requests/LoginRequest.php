<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレスを入力してください',

            'password_confirmation.required' => 'パスワード確認は必須です',
            'password_confirmation.string' => 'パスワード確認は文字列である必要があります',
            'password_confirmation.min' => 'パスワード確認は8文字以上で入力してください',
            'password_confirmation.same' => 'パスワードが一致しません',
            'login_info.not_found' => 'ログイン情報が登録されていません',
        ];
    }
}
