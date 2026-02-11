<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::send(new ContactMail($contact));

        return redirect('/#contact')->with('success', 'お問い合わせを送信しました。ありがとうございます。');
    }
}
