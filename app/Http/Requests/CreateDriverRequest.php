<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDriverRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:191',
            'tid' => 'required',
            'number' => 'required',
            'frequency' => 'required',
            'integal' => 'required',
            'birthday' => 'nullable',
            'countryofbirth' => 'required|string|min:2|max:191', // lt = less than, lg = larger than
            ];
    }
    public function messages()
    {
        return [
            "name.required" => "車手名稱 為必填",
            "name.min" => "車手名稱 至少需2個字元",
            "tid.required" => "車隊編號 為必填",
            "number.required" => "車號 為必填",
            "frequency.required" => "出賽次數 為必填",
            "integal.required" => "生涯積分 為必填",
        ];
    }
}
