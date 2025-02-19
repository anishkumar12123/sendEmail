<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomEmail;
class mailController extends Controller
{
    public function sendmail(){
        $to="rohitkumar58620@gmail.com";
        $msg="dummy mail";
        $subject="code setp by setp";

        mail::to($to)->send(new WelcomEmail($msg,$subject));
    }
}
