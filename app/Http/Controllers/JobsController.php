<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function job(){
        return view('browse.jobs');
    }
    public function pricing(){
        return view ('browse.pricing');
    }
}
