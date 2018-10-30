<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Mollie;

class OrderController extends Controller
{
    public function place()
    {

    	$order = Order::create([ ]);

       	$payment = Mollie::api()->payments()->create([
	    'amount' => [
	        'currency' => 'EUR',
	        'value' => '449.00', // You must send the correct number of decimals, thus we enforce the use of strings
	    ],
	    "description" => "BluLocks fiets",
	    "redirectUrl" => 'http://9355e0ce.ngrok.io/blulocks/public/shop',
	    'webhookUrl'   => 'http://9355e0ce.ngrok.io/blulocks/public/webhooks/mollie',
	]);

   	Order::find($order->id)->update(['mollie_id'=>$payment->id]);

	return redirect($payment->_links->checkout->href);
    }
}
