<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //3eme methode
           /* "name"=>'bail|required|min:2|alpha',
            "description"=>'bail|required|max:100',
            "price"=>'bail|required|max:100',
            "stock"=>'bail|required|max:10',*/
        ];
    }
}
