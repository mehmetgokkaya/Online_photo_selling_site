<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
            'mainPassword'=>'bail|required|min:8',
            
            'password'=>'bail|required|min:8',
            'cPassword'=>'bail|required|required_with:password|same:password|min:8',
            
            
        ];
    }

    

}
