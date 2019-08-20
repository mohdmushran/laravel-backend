<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function mouse($laptopname=null,$seriesname=null) {
		return view('laptop.series.series',compact('laptopname','seriesname'));
	}
}
