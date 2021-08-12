<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailNotification extends Notification
{
    use Queueable;

    private $name;
    private $email;
    private $phone;
    private $service;
    private $content;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $service, $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->service = $service;
        $this->content = $content;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hola Marius')
                    ->subject($this->service)
                    ->line('Tienes una nueva notificación de '.$this->name)
                    ->line('Email: '.$this->email)
                    ->line('Teléfono: '.$this->phone)
                    ->line('Mensaje: '.$this->content)
                    ->action('Ir a la web', url('/'))
                    ->line('¡Gracias por usar nuestra web!');
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
            //
        ];
    }
}
