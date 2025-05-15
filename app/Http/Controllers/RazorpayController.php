<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Session;
use Illuminate\Http\Request;

class RazorpayController extends Controller
{
    

    public function payment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if ($payment->capture(['amount' => $payment['amount']])) {
            // Save to DB or perform order confirmation
            return redirect()->back()->with('success', 'Payment successful!');
        } else {
            return redirect()->back()->with('error', 'Payment failed!');
        }
    }
}
