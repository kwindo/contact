<?php

namespace Kimdevylder\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Kimdevylder\Contact\Models\Contact;
use Kimdevylder\Contact\Mail\ContactMailable;

use Mail;

class ContactController extends Controller
{
    public function index() {

        return view('contact::contact');

    }

    public function send(Request $request) {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));

        Contact::create($request->all());
        return redirect(route('contact'));

    }
}
