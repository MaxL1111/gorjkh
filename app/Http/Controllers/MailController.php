<?php

namespace App\Http\Controllers;

use App\Mail\MailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendform(Request $request)
    {

        $destination = $request->destination;
        $user_name = $request->user_name;
        $user_address = $request->user_address;
        $user_mail = $request->user_mail;
        $user_text = $request->user_text;
        $user_image = $request->user_image;



        Mail::to('1184mak@gmail.com')->send(new MailUser($destination, $user_name,
            $user_address, $user_mail, $user_text, $user_image));

        echo "Письмо отправлено успешно!";
    }
}
