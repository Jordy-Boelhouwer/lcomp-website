<?php

namespace App\Http\Controllers;
use App\Mail\WifiScanMail;
use App\Mail\WifiScanSentMail;
use App\WifiScan;
use Carbon\Carbon;
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
            'name' => request('name'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'date' => request('date')
        ]);

        Mail::to($wifiScan)->send(new WifiScanSentMail($wifiScan));

        Mail::to("jordyboelhouwer@hotmail.com")->send(new WifiScanMail($wifiScan));

        flash('Wifi scan verzoek successvol verstuurd!')->success();

        return redirect('/');
    }
}
