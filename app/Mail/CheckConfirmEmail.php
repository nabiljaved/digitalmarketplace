<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $price;
    public $total;
    public $serviceCharge;
    public $couponAmount;
    public $email;

    public function __construct($title, $price, $serviceCharge, $couponAmount, $email)
    {
        $this->title = $title;
        $this->price = $price;
        $this->serviceCharge = $serviceCharge;
        $this->couponAmount = $couponAmount;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('cheque-acknowledgement')
            ->subject('Cheque Collection Email')
            ->with([
                'title' => $this->title,
                'price' => $this->price,
                'serviceCharge' => $this->serviceCharge,
                'couponAmount' => $this->couponAmount,
                'email' => $this->email,
            ]);
    }
}
