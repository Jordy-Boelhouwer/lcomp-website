<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactRequest;

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

        ContactRequest::create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'question' => request('question')
        ]);

        return redirect('/');
    }
}
