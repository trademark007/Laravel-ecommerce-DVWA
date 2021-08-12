<?php

namespace App\Http\Requests\backend\users;

use Illuminate\Foundation\Http\FormRequest;

class createUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:5|max:50',
            'last_name' => 'required|min:5|max:50',
            'email' => 'required|email|max:255|regex:/(.*)@wearehackerone\.com/i|unique:users',
            'gender' => 'required',
            'status' => 'required',
            'city' => 'required',
            'country' => 'required',
            'password' => 'required|min:3|max:50',
        ];
    }

    // public function withValidator($validator)
    // {
    //     if ($validator->fails()) {
    //         toastr()->error('Periksa kembali inputan anda!');
    //     }
    // }
}
