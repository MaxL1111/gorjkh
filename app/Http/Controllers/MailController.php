<?php

namespace App\Http\Controllers;

use App\Mail\MailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendform(Request $request)
    {
       $name = $request->username;

       Mail::to('1184mak@gmail.com')->send(new MailUser($name));
     //   Mail::to('mak1184@mail.ru')->send(new MailUser($name));
    }
}
