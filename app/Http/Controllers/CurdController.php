<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\models\Form;
use App\models\Offer;
use App\models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Traits\ImageMethod;
use App\Events\VideoViewr;
class CurdController extends Controller
{
    use ImageMethod;
    public function select_form(){
//        return Offer::get();
        $data =  Form::select('id','fname','lname')->get();
        return view('forms.studentForm',compact('data'));
        }

        public function insert_form(Request $request){
//            $rules = $this->getRules();
//            $messages = $this->getMessages();
//
//            $validator = Validator::make($request->all(),$rules,$messages);
//            if ($validator->fails()){
//                return redirect()->back()->withErrors($validator)->withInput($request->all());
//            }
//            $image_name = $this->upload_image($request->photo,'images/form');
            Form::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
//                'photo'=>$image_name  // 5665453685.jpg
            ]);
            return redirect()->back()->with(['success'=>'تمت العملية بنجاح']);
        }


        public function edit_form($id){
        $data = Form::select('id','fname','lname')->find($id);
                return view('forms.studentFormEdit',compact('data'));
        }
        public function update_form(Request $request,$id){

            $offer = Offer::find($id);

            if (!$offer)
                return redirect()->back();

            //update data

            $offer->update($request->all());

            return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);

        }

        public function getVideo(){
        $video=Video::first();
            event(new VideoViewr($video)); //fire event
        return view('video')->with('videoNum',$video);

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

        public function delete_form($id){
            $deltedData = Form::find($id);  // Form::where('id','=',$id)
            if (!$deltedData)
<<<<<<< HEAD
//                return redirect()->back()->with(['error'=>' لم تمت بنجاح']);
                return abort('404');
=======
>>>>>>> 26b976b22f26183ec3e7f760aca63ff0eb541502
            $deltedData->delete();
            return redirect()->back()->with(['success'=>'تمت بنجاح']);
        }
}
