<?php

namespace App\Http\Controllers;

use App\ContactRequest;
use App\Mail\ContactRequestSentMail;
use App\Mail\ContactRequestMail;
use Illuminate\Http\Request;
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
            'question' => 'required|max:500'
        ]);

        $contactRequest = ContactRequest::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'question' => request('question')
        ]);

        Mail::to($contactRequest)->send(new ContactRequestSentMail($contactRequest));

        Mail::to("jordyboelhouwer@hotmail.com")->send(new ContactRequestMail($contactRequest));

        return redirect('/');
    }
}
