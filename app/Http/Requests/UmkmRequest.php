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
            'idNumber' => 'required|numeric', 
            'dob' => 'required',
            'title' => 'required|unique:umkms', 
            'field' => 'required', 
            'description' => 'required',
            'address' => 'required',
            'district' => 'required',
            'number' => 'required|numeric',
            'image' => 'required'
        ];
    }

    // public function messages()
    // {
    //     return [

    //     ];
    // }
}
