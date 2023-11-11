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

        $toRecipients = [
            'ramgupta86928@gmail.com',
            'ramgupta9137@gmail.com',
            'ramg8692@gmail.com',
        ];
    
        $ccRecipients = [
            'ramlearn51@gmail.com',
            'ramg8692@gmail.com',
        ];
    
        $bccRecipients = [
            'ramg8692@gmail.com',
            'ramg8692@gmail.com',
        ];
    


        Mail::to($toRecipients)->cc($ccRecipients)->bcc($bccRecipients)->send(new MyCustomMail2($dynamicData,$dynamictemplate));

        echo 'Email sent successfully!';
    }
}
