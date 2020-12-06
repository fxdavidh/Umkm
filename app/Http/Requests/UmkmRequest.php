<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UmkmRequest extends FormRequest
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
            'owner' => 'required', 
            'dob' => 'required',
            'email' => 'required|email', 
            'idNumber' => 'required|numeric', 
            'title' => 'required|unique:umkms', 
            'field' => 'required', 
            'description' => 'required',
            'district' => 'required',
            'number' => 'required|numeric|regex:/62.+$/i',
            'image' => 'required'
        ];
    }

    // public function messages()
    // {
    //     return [

    //     ];
    // }
}
