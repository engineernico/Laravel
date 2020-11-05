<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{

    public function handle($request, Closure $next)
    {
        $checkName = auth('admin')->user()->name;  //mohamed
        if ($checkName!="mohamed adel"){
            return redirect()->withInput()->getRequest();
        }
        return $next($request);
    }
}
