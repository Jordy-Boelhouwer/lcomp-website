<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function automation() {
        return view('services.automation');
    }

    public function wifi() {
        return view('services.wifi');
    }

	public function cloud() {
        return view('services.cloud');
    }

  public function consultancy() {
        return view('services.consultancy');
  }

  public function repair() {
        return view('services.repair');
  }

  public function voip() {
        return view('services.voip');
  }

  public function management() {
        return view('services.management');
  }

}
