<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $user_name;
    protected $destination;
    protected $user_address;
    protected $user_mail;
    protected $user_text;
    protected $user_image;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($destination, $user_name, $user_address, $user_mail, $user_text, $user_image)
    {
        $this->user_name = $user_name;
        $this->destination = $destination;
        $this->user_address = $user_address;
        $this->user_mail = $user_mail;
        $this->user_text = $user_text;

        if($user_image == null){
            $this->user_image = __DIR__ . '/../../public/images/no_img.jpg';
        }else{
            $this->user_image = $user_image;
        }

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mailtemplate')
            ->with([
                'destination' => $this->destination,
                'userName' => $this->user_name,
                'userAddress' => $this->user_address,
                'userMail' => $this->user_mail,
                'userText' => $this->user_text,

            ])
            ->attach( $this->user_image, [
                'as' => 'image.jpeg',
                'mime' => 'image/jpeg',
            ])
            ->subject('Обращение от физ лица');
    }
}
