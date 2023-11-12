<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class UserFollowNotification extends Notification
{
    use Queueable;
protected $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','slack'];
    }

    public function toSlack($notifiable){
return (new SlackMessage)->content($this->user['name']."started following you");
    }

    
    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'name'=>$this->user->name,
            'email'=>$this->user->email,
        ];
    }
}
