<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUs extends Notification
{
    use Queueable;
    public $name;
    public $email;
    public $message;

    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['Mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Message Submited')
            ->greeting('Hello Admin')
            ->line('You recieved a new message from your Contact Form')
            ->line('**Name:**'.$this->name)
            ->line('**Name:**'. $this->email)
            ->line('**Name:**'. $this->message)
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!')
            ->line('Sent on:'.now()->format('F j,Y,g:i a'))
            ;
            
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
