<?php

namespace App\Http\Controllers;
use App\Mail\WifiScanMail;
use App\Mail\WifiScanSentMail;
use App\WifiScan;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\WifiScanRequest;

class WifiController extends Controller
{
    public function index() {
        return view('wifi-scan.index');
    }

    // Create a new contact request
    public function store(WifiScanRequest $request) {

        $wifiScan = WifiScan::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'question' => request('question')
        ]);

        Mail::to($wifiScan)->send(new WifiScanSentMail($wifiScan));

        Mail::to("jordyboelhouwer@hotmail.com")->send(new WifiScanMail($wifiScan));

        return redirect('/');
    }
}
