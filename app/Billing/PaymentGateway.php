<?php
namespace App\Billing;

use Illuminate\Support\Str;
use App\Billing\PaymentGatewayContact;

class PaymentGateway implements PaymentGatewayContact
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

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}