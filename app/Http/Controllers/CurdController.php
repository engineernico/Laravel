<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\models\Form;
use App\models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurdController extends Controller
{
    public function select(){
//        return Offer::get();
        return Offer::select('id','name')->get();
        }

        public function insert(Request $request){
//            $rules = $this->getRules();
//            $messages = $this->getMessages();
//
//            $validator = Validator::make($request->all(),$rules,$messages);
//            if ($validator->fails()){
//                return redirect()->back()->withErrors($validator)->withInput($request->all());
//            }
            Form::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname
            ]);
            return $request;
//            return redirect()->back()->with(['success'=>'تمت العملية بنجاح']);
        }


        public function getRules(){

        $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
            return $rules;
        }

        public function getMessages()
        {
            $messages = [
                // main syntax : nameOfFiled.rule => message
                'name.required' => __('message.failed'),
                'name.unique' => 'اسم العرض موجود ',
                'price.numeric' => 'سعر العرض يجب ان يكون ارقام',
                'price.required' => 'السعر مطلوب',
                'details.required' => 'ألتفاصيل مطلوبة ',
            ];
            return $messages;
        }
}
