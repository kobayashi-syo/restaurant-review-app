<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewCreate extends FormRequest
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
            'name' => 'required|max:20',
            'sex' => 'required',
            'age' => 'required',
            'mail' => 'required|max:100',
            'review' => 'required',
            'opinion' => 'max:300',
        ];
    }

    public function attributes()
    {
        return[
            'name' => '氏名',
            'sex' => '性別',
            'age' => '年代',
            'mail' => 'メールアドレス',
            '評価' => 'review',
            'ご意見' => 'opinion',
        ];
    }
}
