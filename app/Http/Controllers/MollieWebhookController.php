<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie;
use App\Order;

class MollieWebhookController extends Controller
{


     public function handle(Request $request) {

        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {

        	$order = Order::where('mollie_id',$request->id)->first();
        	Order::find($order->id)->update(['payed'=>true]);

        	return response('OK', 200);   
        }
    }

}
