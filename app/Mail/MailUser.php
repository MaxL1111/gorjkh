<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $user_citizen;
    protected $user_name;
    protected $destination;
    protected $user_address;
    protected $user_mail;
    protected $user_text;
    protected $user_image;
    protected $organization_name;
    protected $organization_heading = "Полное наименование юридического лица:";


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_citizen,$destination, $user_name,
                                $user_address, $user_mail, $user_text, $user_image, $organization_name)
    {
        $this->user_name = $user_name;
        $this->destination = $destination;
        $this->user_address = $user_address;
        $this->user_mail = $user_mail;
        $this->user_text = $user_text;
        $this->user_citizen = $user_citizen;

        if($user_image == null){
            $this->user_image = __DIR__ . '/../../public/images/no_img.jpg';
        }else{
            $this->user_image = $user_image;
        }

        if($organization_name == null){
            $this->organization_name = "";
            $this->organization_heading = "";
        }else{
            $this->organization_name = $organization_name;
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
                'userCitizen' => $this->user_citizen,
                'destination' => $this->destination,
                'userName' => $this->user_name,
                'userAddress' => $this->user_address,
                'userMail' => $this->user_mail,
                'userText' => $this->user_text,
                'organizationName' => $this->organization_name,
                'organizationHeading' => $this->organization_heading,


            ])
            ->attach( $this->user_image, [
                'as' => 'image.jpeg',
                'mime' => 'image/jpeg',
            ])
            ->subject($this->user_citizen);
    }
}
