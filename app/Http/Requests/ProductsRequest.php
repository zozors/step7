<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'company_id' => 'required | digits_between:1,100',
            'product_name' => 'required',
            'price' => 'required | digits_between:1,1000',
            'stock' => 'required | digits_between:0,100',
            'comment' => 'nullable | max:100',
            'img_path' => 'nullable | image',
        ];
    }

    /**
     * 項目名
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'company_id' => '会社ID',
            'product_name' => '商品名',
            'price' => '価格',
            'stock' => '在庫',
            'comment' => 'コメント',
            'img_path' => '画像'
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages() {
        return [
            'company_id.required' => ':attributeは必須項目です。',
            'company_id.digits_between' => ':attributeは1以上、100以下の数字を入力してください。',
            'product_name.required' => ':attributeは必須項目です。',
            'price.required' => ':attributeは必須項目です。',
            'price.digits_between' => ':attributeは1以上、1000以下の数字を入力してください。',
            'stock.required' => ':attributeは必須項目です。',
            'stock.digits_between' => ':attributeは0以上、100以下の数字を入力してください。',
            'comment.digits_between' => ':attributeは1以上、100以下の数字を入力してください。',
            // 'image.required'=>'【画像】画像を設定してください。'
            'image.image' => ':attributeの形式を確認してください'
        ];
    }
}
