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
        $contactRequest = self::createContactFormRequest();
        self::sendMails($contactRequest);
        self::showSuccessMessage();
        return redirect('/');
    }

    /**
     * @return ContactRequest|\Illuminate\Database\Eloquent\Model
     * Create contactFormRequest which will be saved in the database
     */
    private function createContactFormRequest() {
        $contactRequest = ContactRequest::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'question' => request('question')
        ]);
        return $contactRequest;
    }

    /**
     * @param ContactRequest $contactRequest
     * Send confirmation mail to contact requester and send mail with contact data to info@lcomp.nl
     */
    private function sendMails($contactRequest) {
        Mail::to($contactRequest)->send(new ContactRequestSentMail($contactRequest));
        Mail::to("jordyboelhouwer@hotmail.com")->send(new ContactRequestMail($contactRequest));
    }

    /**
     * Show a success message to the user upon redirect after successfully filling the contact form
     */
    private function showSuccessMessage() {
        flash('Contactverzoek successvol verstuurd!')->success();
    }
}
