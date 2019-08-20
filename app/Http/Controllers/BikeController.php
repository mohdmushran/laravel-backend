<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function motorcycle($bikename=null) {
		return view ('bike.bike',compact('bikename'));
	}
}
