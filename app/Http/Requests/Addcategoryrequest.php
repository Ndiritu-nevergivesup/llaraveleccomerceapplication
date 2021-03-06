<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Addcategoryrequest extends FormRequest
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
            'parent'=>'required|numeric',
            'sections'=>'required|numeric',
            'categoryname'=>'required|unique:users|string|max:50',
            'slug'=>'required|string|max:50',
            'categoryimage'=>'nullable',
            'categorydiscount'=>'required|numeric',
            'categorydescription'=>'required|max:1000',
            'categoryurl'=>'required|string|max:100',
            'metatitle'=>'required|string|max:255',
            'metadescription'=>'required|max:1000',
            'metakeyword'=>'required|string|max:255',
            'status'=>1,
        ];
    }
}
