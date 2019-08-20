<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   public function test() {
	   return 'testingfunction';
   }
   public function mushran() {
	   //return 'this is salmanfunction';
	   return view('salman');
   }
   public function monu() {
	   return view ('monu');
   }
}
