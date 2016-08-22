<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
     *
     * @return array
     */
    /*'address'=>'',
     'property'=>'',
     'commit'=>'',*/
    public function rules()
    {
        return [
           'img'=>'required|image|mimes:jpeg,png,jpg,gif',
           'title'=>'required',
           'originalprice'=>'required',
           'state'=>'required',
            'catprodcts'=>'required',
            'city'=>'required',
         ];
    }
}



















