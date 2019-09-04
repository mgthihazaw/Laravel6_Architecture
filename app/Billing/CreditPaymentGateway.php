<?php
namespace App\Billing;

use Illuminate\Support\Str;
use App\Billing\PaymentGatewayContact;

class CreditPaymentGateway implements PaymentGatewayContact
{
    private $currency;
    private $discount;


    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

   public function setDiscount($discount)
   {
       $this->discount = $discount;
   }
    

    public function charge($amount)
    {
        //Charge the bank
        $fees = $this->discount * 0.03;

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }
}