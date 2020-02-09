<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'avatar'=>'required',
            'email' => 'required|email',
            'first_name' => 'required|string|max:50', 
            'middle_name' => 'required|string|max:50', 
            'second_name' => 'required|string|max:50', 


        ];
    }



}
