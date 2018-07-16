<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyscalController extends Controller
{
    public function application() {
        return view('syscal.application');
    }

    public function systems() {
        return view('syscal.systems');
    }

    public function calamities() {
        return view('syscal.calamities');
    }
	
	public function service() {
        return view('syscal.service');
    }
	
	public function prices() {
    return view('syscal.prices');
	}
}
