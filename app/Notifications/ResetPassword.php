<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;

    private $token;
    private $email;

    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $user = User::where('email', $this->email);
        $pass = str_random(8);

        $user->update([
            'password' => bcrypt($pass)
        ]);

        return (new MailMessage)
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Reset password from ' . env('MAIL_FROM_NAME'))
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->line('Your new password: ' . $pass);
    }
}
