<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendmailController extends Controller
{
    //
    public function send_mail(){
        $to_name = 'Hison';
        $to_email = 'hison429@gmail.com';
        $data = array('name'=>"Hi Son", "body" => "Test mail");
            
        $return = Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
            $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
        });
        dump($return);
    }
}
