<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Adminlogin(Request $request){

        $this->validate($request,[
           'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email , 'password'=>$request->password])){

           return redirect()->intended('/AdminDash');

        }
        else{
            return redirect()->back()->withInput($request->only('email'));
        }

    }
}
