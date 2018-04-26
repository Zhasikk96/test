<?php

namespace App\Mail;

use App\Certificate;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $certificates;
    public $user;

    public function __construct($user_id)
    {
        $user = User::find($user_id);
        $this->user = $user;
        $certificates = Certificate::where('user_id', $user_id)->get();
        $this->certificates = $certificates;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('air_man1995@mail.ru')
            ->attach(realpath(str_replace('public','storage', $this->certificates[0]->path)))
            ->attach(realpath(str_replace('public','storage', $this->certificates[1]->path)))
            ->attach(realpath(str_replace('public','storage', $this->certificates[2]->path)))
            ->attach(realpath(str_replace('public','storage', $this->certificates[3]->path)))
            ->view('emails.index');
    }
}
