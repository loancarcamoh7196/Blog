<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
             'name'     => 'max:120|required|unique:users',
             'email'    =>'required|max:120|min:4|unique:users',
             'password' =>'required|max:30|min:6',
             'type'     =>'required'
        ];
    }
}
