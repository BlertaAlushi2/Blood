<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $newRequest;
    public function __construct($newRequest)
    {
        //
        $this->newRequest = $newRequest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($this->newRequest->confirmed){
            $message= 'Your blood request at '.$this->newRequest->request_date.' is aproved.';
        }
        else{
            $message= 'Your blood request at '.$this->newRequest->request_date.' is not aproved. We are Sorry!';
        }
        return (new MailMessage)
                    ->line($message)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'request_id' => $this->newRequest->id,
            'blood' => $this->newRequest->blood->name,
            'request_date'=>$this->newRequest->request_date,
            'quantity'=>$this->newRequest->quantity,
            'confirmed'=>$this->newRequest->confirmed
        ];
    }
}
