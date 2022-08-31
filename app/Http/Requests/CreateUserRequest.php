<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'fname'          =>'required',
            'lname'          =>'required',
            'email'          =>['required','unique:users'],
            'address_line_1' =>'required',
            'city'           =>'required',
            'zip_code'       =>'required',
            'state'          =>'required',
            'home_court'     =>'required',
            'availability'   =>'required',
        ];
    }

    public function messages()
    {
        return [
            'fname.required'           =>'Please enter your first name',
            'lname.required'           =>'Please enter your last name',
            'email.required'           =>'Please enter your email',
            'email.unique'             =>'This email is already taken',
            'address_line_1.required'  =>'Your Address is required',
            'city.required'            =>'Please enter your city',
            'zip_code.required'        =>'Zip Code is required',
            'state.required'           =>'State   is required',
            'home_court.required'      =>'Home Court is required',
            'availability.required'    =>'Please select atleast one',
        ];
    }

}
