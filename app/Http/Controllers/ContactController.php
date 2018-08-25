<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequestSent;
use Illuminate\Http\Request;
use App\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Get contact page
    public function index() {
        return view('contact.index');
    }

    // Create a new contact request
    public function store() {

        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'question' => 'required'
        ]);

        $contactRequest = ContactRequest::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'question' => request('question')
        ]);

        Mail::to($contactRequest)->send(new ContactRequestSent($contactRequest));

        return redirect('/');
    }
}
