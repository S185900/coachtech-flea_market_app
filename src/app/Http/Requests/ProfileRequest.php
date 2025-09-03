<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'profile_image' => 'nullable|file|mimes:jpeg,png',
            'username' => 'required|string|max:20',
            'postal_code' => ['required', 'regex:/^\d{3}-\d{4}$/'],
            'address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'profile_image.file' => 'プロフィール画像はファイルである必要があります',
            'profile_image.mimes' => 'プロフィール画像はjpegまたはpng形式のファイルである必要があります',

            'username.required' => 'お名前を入力してください',
            'username.string' => 'ユーザー名は文字列である必要があります。',
            'username.max' => 'ユーザー名は20文字以内で入力してください。',

            'postal_code.required' => '郵便番号は必須です',
            'postal_code.regex' => '郵便番号は「XXX-XXXX」の形式で入力してください',

            'address.required' => '住所は必須です',
            'address.string' => '住所は文字列である必要があります',
        ];
    }
}
