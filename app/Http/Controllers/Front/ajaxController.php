<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\models\Form;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;

class ajaxController extends Controller
{
    public function viewAjax(){
        return view('forms.ajaxStudentForm');
    }

    public function ajaxStore(OfferRequest $request){

          $data = Form::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,]);

          // responding
          if ($data){
              return response()->json([
              'status'=>true,
              'msg'=>'done'
          ]);}
          else{
              return response()->json([
                  'status'=>false,
                  'msg'=>'لم تتم بنجاح'
              ]);
          }
        }

}
