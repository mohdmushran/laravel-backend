<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartBootStrapController extends Controller
{
    public function blog() {
        return view('cleanblog.blog');
    }
    public function about(){
        return view('cleanblog.about');
    }
    public function post(){
        return view('cleanblog.post');
    }
    public function contact(){
        return view('cleanblog.contact');
    }
}
