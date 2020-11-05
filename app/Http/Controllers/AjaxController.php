<?php

namespace App\Http\Controllers;

use App\models\Form;
use App\models\Offer;
use Illuminate\Http\Request;
use App\Traits\ImageMethod;

class AjaxController extends Controller
{
    use ImageMethod;
    public function formToInsert(){

        return view('ajax.ajaxInsert');
    }


    public function AjaxInsert(Request $request){
//        $image_name = $this->upload_image($request->photo,'images/form');
        $data = Form::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
//            'photo'=>$image_name  // 5665453685.jpg
        ]);
        if ($data)
        {
            return response()->json([
            'status'=>true]);
        }else
            {
            return response()->json([
                'status'=>false]);
        }

    }
    public function AjaxSelect(){

        $data =  Form::get();

       return view('ajax.showdata',compact('data'));
    }


    public function AjaxDelete(Request $request){

     $show = Form::find($request->st_id); //choose the row where id = $request->st_id
       $show->delete();
//       if($show){
//           return response()->json(['status'=>true,'id' =>$request->st_id ]);
//       }
//       else{
//           return response()->json(['status'=>false]);
//
//       }

    }

    public function edit_with_ajax(Request $request){
        $data = Form::select('id','fname','lname')->find($request->st_id);
        return $data;
//        return view('ajax.editdata',compact('data'));
    }

    public function ajaxUpdate(Request $request){

        $offer = Offer::find($request->id);

//        if (!$offer)
//            return redirect()->back();

        //update data

        $offer->update($request->all());

        return response()->json(['success' => ' تم التحديث بنجاح ']);

    }
}
