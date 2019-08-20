<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function home($festivalname=null) {
		return view('festival.home',compact('festivalname'));
	}
}
