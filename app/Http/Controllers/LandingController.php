<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function wifi() {
        return view('landing.wifi-scan');
    }
}
