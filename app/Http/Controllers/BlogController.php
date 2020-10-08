<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
   public function blog(){

       return view('websiteDirectory.blog');
   }
   public function blog_post(){

       return view('websiteDirectory.blog-post');
   }
   public function contact(){

       return view('websiteDirectory.contact');
   }
   public function home(){

       return view('websiteDirectory.index');
   }
}
