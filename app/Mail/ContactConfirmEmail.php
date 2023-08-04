<?php

// app/Mail/ContactConfirmEmail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phoneno;
    public $message;

    public function __construct($name, $email, $phoneno, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneno = $phoneno;
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('contactus-acknowledgement')
            ->subject('Thank You for Contacting Us')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'phoneno' => $this->phoneno,
                'message' => $this->message,
            ]);
    }
}
