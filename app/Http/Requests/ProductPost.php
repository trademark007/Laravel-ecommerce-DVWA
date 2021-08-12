<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'name' => 'required|min:4|max:225',
            'description' => 'required|min:10|max:10000',
            'size' => 'required|size|max:5',
            'color' => 'required|size|max:5',
            'material' => 'required|min:5|max:225',
            'weight' => 'required|min:5|max:225',
            'guarantee' => 'required|min:3|max:225',
            'price' => 'required|min:5|max:225',
            'slug' => 'required|min:5|max:225',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama harus',
            'description.required' => 'Nama harus',
            'size.required' => 'Nama harus',
            'color.required' => 'Nama harus',
            'material.required' => 'Nama harus',
            'weight.required' => 'Nama harus',
            'guarantee.required' => 'Nama harus',
            'price.required' => 'Nama harus',
            'slug.required' => 'Nama harus',
        ];
    }
}

