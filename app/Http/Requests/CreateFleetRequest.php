<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFleetRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:100',
            'country' => 'required|string|min:2|max:100',
            'location' => 'required|string|min:2|max:100',
            
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "車隊名稱 為必填",
            "name.min" => "車隊名稱 至少需2個字元",
            "country.required" => "代表國家 為必填",
            "country.min" => "代表國家 至少需2個字元",
            "location.required" => "所在地 為必填",
            "location.min" => "所在地 至少需2個字元",
            
        ];
    }
}
