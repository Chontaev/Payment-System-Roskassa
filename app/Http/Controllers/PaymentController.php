<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('payment');
    }
    public function getData(Request $request){
        $data = $request;
        $payment = new Payment();
        $payment->email = $request->email;
        $payment->shop_id = $request->shop_id;
        $payment->order_id = $request->order_id;
        $payment->lang = $request->lang;
        $payment->currency = $request->currency;
        $payment->sign = $request->sign;
        $payment->amount = $request->amount;
        $payment->save();
        return view('payment',compact('data'));
    }
    public function setData(Request $request)
    {
       $payment = Payment::find($request->sign);
       if($payment->amount == $request->amount){
           $payment->paymnet_done=true; 
       }
    }
    public function show(){
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }
    public function payed(){
        $payments = Payment::all();
        return view('payments.payed', compact('payments'));
    }
    public function notPayed(){
        $payments = Payment::all();
        return view('payments.notpayed', compact('payments'));
    }
}
