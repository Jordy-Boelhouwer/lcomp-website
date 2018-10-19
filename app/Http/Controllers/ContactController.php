<?php

namespace App\Http\Controllers;

use App\ContactRequest;
use App\Mail\ContactRequestSentMail;
use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\contactFormRequest;

class ContactController extends Controller
{
    // Get contact page
    public function index() {
        return view('contact.index');
    }

    // Create a new contact request

    /**
     * @param contactFormRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(contactFormRequest $request) {

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
