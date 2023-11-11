<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Notification;

class CustomNotificationController extends Controller
{
    public function index(){

        $title = "welcome bros";
        $user = User::get();

        foreach ($user as $value) {
           // Notification::send($value,new WelcomeNotification);
           $value->notify(new WelcomeNotification($title));
        }

        
        
        return 'notification2';

    }


}
