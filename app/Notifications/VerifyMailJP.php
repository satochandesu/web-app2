<?php
namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

// オーバーライドに必要
use Illuminate\Support\Facades\Lang;

class VerifyMailJP extends VerifyEmail
{
    // オーバーライド
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
        }

        return (new MailMessage)
            ->subject(Lang::get('コンディションアプリ認証メール'))
            ->line(Lang::get('下記リンクをクリックして利用を開始してください'))
            ->action(Lang::get('認証しサイトへ'), $verificationUrl)
            ->line(Lang::get('このメールに身に覚えがない場合は、clickせずに削除してください'));
    }
}
