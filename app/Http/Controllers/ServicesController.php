<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function wifi() {
        return view('services.wifi');
    }
	
	public function cloud() {
        return view('services.cloud');
    }

}
