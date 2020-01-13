<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.contact_us');
    }

    public function send(Request $request)
    {
        $subject = $request->input('subject');
        $message_body = $request->input('body');
        $email = $request->input('email');
        Mail::send('pages.send_mail', ['sender' => $email, 'subject' => $subject, 'body' => $message_body], function ($message) use ($email) {
            $message->from($email, 'Blog App');
            $message->to('cokola@cytonn.com', 'Software Dev');
        });
        return redirect('/home');
    }

    public
    function show($id)
    {
        //
    }


    public
    function edit($id)
    {
        //
    }

    public
    function update(Request $request, $id)
    {
        //
    }

    public
    function destroy($id)
    {
        //
    }
}
