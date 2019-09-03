<?php

namespace App\Http\Controllers;

use App\Mail\MailUser;
use App\Mail\MailUserQuestion;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendform(Request $request)
    {

        $user_citizen = $request->user_citizen;
        $destination = $request->destination;
        $user_name = $request->user_name;
        $user_address = $request->user_address;
        $user_mail = $request->user_mail;
        $user_text = $request->user_text;
        $user_image = $request->user_image;
        $organization_name = $request->organization_name;



        Mail::to('1184mak@gmail.com')->send(new MailUser($user_citizen, $destination, $user_name,
            $user_address, $user_mail, $user_text, $user_image, $organization_name));

    }

    public function sendquestion(Request $request)
    {

        $user_name = $request->user_name;
        $user_mail = $request->user_mail;
        $user_question = $request->user_question;


        Mail::to('1184mak@gmail.com')->send(new MailUserQuestion($user_name,
             $user_mail, $user_question));

    }

}
