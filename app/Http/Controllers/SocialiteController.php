<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class SocialiteController extends Controller
{
    public function redirect($services){
        return Socialite::driver($services)->redirect();
    }
    public function callback($services){
        $user = Socialite::with($services) -> user();

    }

}
