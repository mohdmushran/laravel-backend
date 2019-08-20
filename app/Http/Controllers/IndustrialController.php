<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrialController extends Controller
{
     public function factries() {
         return view('industry.home');
     }
     public function elements(){
         return view('industry.elements');
     }
     public function generic(){
         return view('industry.generic');
     }
}
