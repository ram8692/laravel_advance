<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserFollowNotification;
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

    public function notify(){

        /* @foreach (auth()->user()->notifications as $notification) for all notifications
        @foreach (auth()->user()->readnotifications as $notification) for readed notifications */

        if(auth()->user()){
            $user = User::first();
            auth()->user()->notify(new UserFollowNotification($user));
        }
    }

    public function markasread($id){
//auth()->user()->markasread($id);
//dd($id);
auth()->user()->notifications()->where('id',$id)->update(['read_at'=>now()]);
        return redirect()->back();
    }


}
