<?php

namespace App\Http\Controllers;

use App\Mail\MyCustomMail2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTestController2 extends Controller
{
    public function sendMail()
    {
        $dynamicData = [
            'name' => 'John Doe',
            'message' => 'Hello, this is a dynamic message!',
        ];

        $dynamictemplate = 'emails.my_custom_mail3';


        Mail::to('recipient@example.com')->send(new MyCustomMail2($dynamicData,$dynamictemplate));

        echo 'Email sent successfully!';
    }
}
