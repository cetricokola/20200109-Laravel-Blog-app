<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification
{
    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        $data = array('name' => $event->user->name, 'email' => $event->user->email, 'body' => 'Welcome to Blogs Application. Enjoy every bit of blogs daily.');
        Mail::send('pages.mail', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Welcome to our site.');
            $message->from('cokola@cytonn.com');
        });
    }
}
