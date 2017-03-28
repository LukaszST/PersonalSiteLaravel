<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function send(ContactFormRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('mails.basic', ['title' => $title, 'content' => $content], function ($message) use ($request)
        {

            $message->from($request->input('mil'), $request->input('email') .' '. $request->input('lastName'));
            $message->subject($request->input('title'));

            $message->to('kontakt@lukaszurbaniak.pl');

        });

        return redirect('/')->with('message', 'Thanks for the contact');
    }
}
