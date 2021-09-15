<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class GeneralNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $tries = 2;
    public $timeout = 10;
 
    
    public $subject;
    public $greeting;
    public $lines;
    public $action_name;
    public $action_url;
    public $methods;
    public $group_type;
    public $group_unique;
    public $notification_sender_id;
    public $notification_icon;
    public $level;


    public function __construct( 
        $subject="إشعار",
        $greeting="مرحبا",
        $lines=array('لديك تنبيه جديد'),
        $action_name="عرض الإشعار",
        $action_url="",
        $methods=array('database','mail'),
        $group_type="0",
        $group_unique=false,
        $notification_sender_id=null,
        $notification_icon=null,
        $level="info"
    )
    {
        $this->methods=$methods;
        $this->subject=$subject;
        $this->greeting=$greeting;
        $this->lines=implode("<br>",$lines);
        $this->action_name=$action_name;
        $this->action_url=$action_url;
        $this->methods=$methods;
        $this->group_type=$group_type;
        $this->group_unique=$group_unique;
        $this->notification_sender_id=$notification_sender_id;
        $this->notification_icon=$notification_icon;
        $this->level=$level;
    }
 
    public function via($notifiable)
    {
        return $this->methods;

    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                 ->level($this->level)
                 ->subject($this->subject)
                    ->greeting($this->greeting) 
                    ->line($this->lines) 
                    ->action($this->action_name, $this->action_url);
                    

    } 
    
    public function toDatabase($notifiable)
    {
        
        $contet=mb_strlen($this->lines) > 300 ? mb_substr($this->lines, 0, 300) . "..." : $this->lines;

        return [
            'group_type'=>$this->group_type,
            'group_unique'=>$this->group_unique,
            'message'=>'<a href="'.$this->action_url.'">'.$contet.'</a>',
            'notification_icon'=>$this->notification_icon,
            'notification_sender_id'=>$this->notification_sender_id
        ];
    } 
    public function get_template(){

       
        return (new MailMessage)
                 ->level($this->level)
                 ->subject($this->subject)
                    ->greeting($this->greeting) 
                    ->line($this->lines) 
                    ->action($this->action_name, $this->action_url);

/*

        $markdown = new \Illuminate\Mail\Markdown(view(), config('mail.markdown'))->level($this->level)
                 ->subject($this->subject)
                    ->greeting($this->greeting) 
                    ->line('هذة رسالة يتم انشائها تلقائيا')
                    ->line($this->lines) 
                    ->action($this->action_name, $this->action_url);

        return $markdown->render('vendor.notifications.email');*/
    }


/*    public function toArray($notifiable)
    {
        return [
          
        ];
    }*/
}
