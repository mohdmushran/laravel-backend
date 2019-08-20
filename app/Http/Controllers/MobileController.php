<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function apple($mobilename=null,$versionname=null,$colorname=null) {
		return view('mobile.version',compact('mobilename','versionname','colorname'));
	}
}
