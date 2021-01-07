<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReceiptsRequest extends FormRequest
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
            'p_name' => 'required|string|min:7',
            'a_id' => 'required',
            'number' => 'required|string|numChack:a_id',
        ];
    }
    public function messages()
    {
        return[
            'p_name.required' => '期數欄位必填',
            'p_name.min' => '期數最少須輸入7位',
            'number.required' => '號碼欄位必填',
            'number.numChack'=> '號碼只能輸入位',
        ];
    }
}
