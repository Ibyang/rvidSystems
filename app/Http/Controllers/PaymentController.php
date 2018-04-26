<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PaymentController extends Controller
{
    //
    //for posting payments
    public function postPaymentDetails(){

        $paypal_id = 'ivy.opon@sourcefit.com';
        $payment_arr = array(
            'item_number' => Input::get('item_id'),
            'item_name' => Input::get('item_name'),
            'amount' => Input::get('amount')
        );

        return view('frontend.register.payment-form', compact('paypal_id', 'payment_arr'));

    }
}
