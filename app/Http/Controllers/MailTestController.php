<?php

namespace App\Http\Controllers;

use App\Mail\mailtest1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTestController extends Controller
{
    public function sendMail1()
    {
        Mail::to('ramgupta86928@gmail.com')->send(new mailtest1());
    }
}
