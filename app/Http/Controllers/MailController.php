<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendEmail(Request $req){
        $to = $req->to;
        $msg = $req->msg;
        $subject = $req->subject;
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Email send";
    }
}
