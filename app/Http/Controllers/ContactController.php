<?php


namespace App\Http\Controllers;


use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        Mail::to(request('email'))->send(new ContactMe());

         return redirect('/contact')->with('message', 'Email Sent');
    }

}
