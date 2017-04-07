<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use Config;

class EmailController extends Controller
{
    public function send(ContactFormRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('mails.basic', ['title' => $title, 'content' => $content], function ($message) use ($request)
        {
            $message->replyTo($request->input('mil'), $request->input('email') .' '. $request->input('lastName'));
            $message->from('noreply@lukaszurbaniak.pl');

            $message->subject($request->input('title'));

            if (Config::get('app.locale') == 'pl') {
                $message->to('kontakt@lukaszurbaniak.pl');
            } else {
                $message->to('contact@lukaszurbaniak.com');
            }

        });

        return redirect('/')->with('message', 'Thanks for the contact');
    }
}
