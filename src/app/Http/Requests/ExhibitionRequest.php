<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'product_name' => 'required|string',
            'product_description' => 'required|string|max:255',
            'product_image' => 'required|file|mimes:jpeg,png',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => '商品名を入力してください',
            'product_name.string' => '商品名は文字列である必要があります',

            'product_description.required' => '商品説明を入力してください',
            'product_description.string' => '商品説明は文字列である必要があります',
            'product_description.max' => '商品説明は255文字以内で入力してください',

            'product_image.required' => '商品画像を選択してください',
            'product_image.file' => '商品画像はファイルである必要があります',
            'product_image.mimes' => '商品画像はjpegまたはpng形式のファイルである必要があります',

            'category.required' => 'カテゴリーを選択してください',

            'condition.required' => '商品の状態を選択してください',

            'price.required' => '価格を入力してください',
            'price.numeric' => '価格は数値である必要があります',
            'price.min' => '価格は0以上で入力してください',
        ];
    }
}
