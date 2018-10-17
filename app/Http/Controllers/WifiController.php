<?php

namespace App\Http\Controllers;

class WifiController extends Controller
{
    public function index() {
        return view('wifi-scan.index');
    }
}
