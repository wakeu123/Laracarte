<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessagesCreated;
use App\Http\Requests\ContactRequest;
use App\Modeles\Message;

class ContactsController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->msg_content = $request->message;

        $mailable = new ContactMessagesCreated($message);
        Mail::to(config('laracarte.admin_support_mail'))->send($mailable);

        Flashy('Nous vous répondrons dans les plus brèfs delais !');

        $message->save();

        return redirect()->route('root_path');
    }
}
