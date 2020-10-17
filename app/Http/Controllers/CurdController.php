<?php

namespace App\Http\Controllers;

use App\models\Form;
use App\models\Offer;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function select(){
//        return Offer::get();
        return Offer::select('id','name')->get();
        }

        public function insert(){

            Form::create([
                'fname'=>'ahmrd',
                'lname'=>'mohsmrd'
            ]);
            return 'done';
        }
}
