<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tempuploads extends FormRequest
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
            'photoName'=>'required',
            
            'photoType'=>'required',
            'photoDescription'=>'required',
            
            'askingPrice'=>'required',
            'select_file'=>'bail|required|image|mimes:jpeg,jpg,png,gif|min:3',
            'checkbox'=>'required',
        ];
    }

    public function messages(){
        return [
            'checkbox.required' => 'The terms and Conditions need to be Accepted.'
            
            
        ];
    }
}
