<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputRequest extends FormRequest
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
            'date' => 'required|date',
            'account' => 'required',
            'text' => 'required|max:100',
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '日付を入力してください',
            'date.date' => '日付は正しい形で入力してください',
            'account.required' => '科目を入力してください',
            'text.required' => '摘要を入力してください',
            'text.max' => '摘要は :max 文字以内で入力してください',
            'price.required' => '金額を入力してください',
            'price.integer' => '金額は半角数字のみで入力してください',
        ];
    }
}
