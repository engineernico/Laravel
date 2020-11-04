<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RelationOne extends Controller
{
    public function OneToONne(){
        $user = User::with(['phone'=>function($q){
            $q->select('id','code','user_id');
        }])->find('2'); //to tie

        return response()->json($user);
    }
}
