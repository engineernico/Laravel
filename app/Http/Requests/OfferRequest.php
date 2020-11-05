<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }


    public function rules()
    {
        return [

//                'name' => 'required|max:100|unique:offers,name',
//                'price' => 'required|numeric',
//                'details' => 'required',
                'fname' => 'required',
                'lname' => 'required',


        ];
    }

    public function messages()
    {
        return [
            // main syntax : nameOfFiled.rule => message
//            'name.required' => __('message.failed'),
//            'name.unique' => 'اسم العرض موجود ',
//            'price.numeric' => 'سعر العرض يجب ان يكون ارقام',
//            'price.required' => 'السعر مطلوب',
//            'details.required' => 'ألتفاصيل مطلوبة ',

            'fname.required' => 'ألتفاصيل مطلوبة ',
            'lname.required' => 'ألتفاصيل مطلوبة ',
        ];
    }
}
