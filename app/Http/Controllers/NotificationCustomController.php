<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\MyCustomNotification;

class NotificationCustomController extends Controller
{
    public function index()
    {

        $recipient = 'ramgupta9137@example.com'; // Replace with your logic to get the recipient
        $subject = 'Dynamic Database Notification Subject';
        $content = 'This is a dynamic database notification message.';
        $user = User::find(1); // Replace with your notifiable entity
        $notification = new MyCustomNotification($recipient, $subject, $content);

        $user->notify($notification);

        return "Notification sent successfully!";
    }
}
