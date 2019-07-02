<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changeInformation extends FormRequest
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
            'username'=>'bail|required|max:20|min:4',
            
            'phone'=>'bail|required|max:11',
            //'email'=>'bail|required|max:40|min:8|unique:infotable,email',
            
            
        ];
    }
}
