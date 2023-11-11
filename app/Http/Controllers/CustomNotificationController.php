<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Notification;

class CustomNotificationController extends Controller
{
    public function index(){


        $user = User::find(1);

        Notification::send($user,new WelcomeNotification);
        
        return 'notification2';

    }


}
