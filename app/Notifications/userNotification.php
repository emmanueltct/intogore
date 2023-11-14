<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class userNotification extends Notification
{
    use Queueable;
    private $offeredText;
    /**
     * Create a new notification instance.
     */
    public function __construct($offeredText)
    {
        //
        $this->offeredText=$offeredText;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject($this->offeredText['subject'])
                    ->greeting($this->offeredText['greeting'])
                    ->line($this->offeredText['intro'])
                    ->line($this->offeredText['body'])
                    ->action($this->offeredText['offerText'],$this->offeredText['offerUrl'])
                    ->line($this->offeredText['thanks']);
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
            'offer_id'=>$this->offeredText['offerId']
        ];
    }
}
