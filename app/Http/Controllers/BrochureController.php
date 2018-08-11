<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function index() {
        return view('brochure.index');
    }

    public function showPagina1() {
        return response()->file('files/folder_pagina_1.pdf');
    }

    public function showPagina2() {
        return response()->file('files/folder_pagina_2.pdf');
    }
}
