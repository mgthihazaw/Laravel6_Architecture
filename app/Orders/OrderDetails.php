<?php

namespace App\Orders;

use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContact;

class OrderDetails
{
    private $paymentGateway;

     public function __construct(PaymentGatewayContact $paymentGateway)
     {
         $this->paymentGateway = $paymentGateway;
     }

     public function all()
     {
        $this->paymentGateway->setDiscount('500');

        return [
            'name' => 'Thihazaw',
            'address' => 'No 15 ,Sagaing',
        ];
     }
}