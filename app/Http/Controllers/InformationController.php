<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function privacy() {
        return view('information.privacy');
    }

    public function cookie() {
        return view('information.cookie');
    }
}
