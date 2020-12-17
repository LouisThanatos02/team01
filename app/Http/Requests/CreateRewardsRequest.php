<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRewardsRequest extends FormRequest
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
            'a_name'=>'required|string',
            'rule'=>'required|string',
            'money'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return[
            'a_name.required' => '獎項欄位必填',
            'rule.required' => '規則欄位必填',
            'money.required'=>'獎金欄位必填',
            'money.numeric'=>'獎金須為數字'

        ];
    }
}
