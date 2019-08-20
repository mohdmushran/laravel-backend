<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function marcedes() {
		//return 'this is Benz';
		return view('car.Benz');
	}
	
	public function info($carname=null,$number=null) {
		//echo $carname.'-'.$number.'<br/>';
		
		return view('car.info', compact('carname','number'));
	}
	public function home() {
		
	}
}
