<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function sendcontact(ContactRequest $request){
        Mail::to('admin@admin.com')->send(new Contact($request));
        return redirect('/thankyou');
    }
}
