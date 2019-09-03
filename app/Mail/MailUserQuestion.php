<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class MailUserQuestion extends Mailable
{
    use Queueable, SerializesModels;


    protected $user_name;
    protected $user_mail;
    protected $user_question;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name, $user_mail, $user_question)
    {
        $this->user_name = $user_name;
        $this->user_mail = $user_mail;
        $this->user_question = $user_question;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mailtemplatequestion')

            ->with([

                'userName' => $this->user_name,
                'userMail' => $this->user_mail,
                'userQuestion' => $this->user_question,

            ])

            ->subject("Рубрика вопрос-ответ");
    }
}