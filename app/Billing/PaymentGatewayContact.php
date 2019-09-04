<?php
namespace App\Billing;



interface PaymentGatewayContact
{
    
   public function setDiscount($discount);
    

   public function charge($amount);
}