<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContact;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails,PaymentGatewayContact $paymentGatewayContact)
    {
        $orders = $orderDetails->all();
        
        dd($paymentGatewayContact->charge(2000));
    }
}
