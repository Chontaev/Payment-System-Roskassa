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
        $secret = 'Ild5m1Jf';
        $sign = array(
            'amount'=>$request->amount,
            'order_id'=>$request->order_id,
            'shop_id'=>'9CFF252E3074FC9682187D5165A6DF33',
            'currency'=>$request->currency,
            'test' =>1,
        );
       $payment = new Payment();
       $payment->email=$request->email;
       $payment->order_id=$request->order_id;
       $payment->currency=$request->currency;
       $payment->shop_id=$request->shop_id;
       $payment->lang=$request->lang;
       $payment->amount=$request->amount;
       $payment->done=$request->false;
       $payment->save();
        ksort($sign);
        $str = http_build_query($sign);
        $key = md5($str . $secret);
        $data = array(
            'amount'=>$request->amount,
            'order_id'=>$request->order_id,
            'shop_id'=>'9CFF252E3074FC9682187D5165A6DF33',
            'currency'=>$request->currency,
            'sign' =>$key,
            'test' =>1,
        );
        $link = 'https://pay.roskassa.net/?'.http_build_query($data);
        return redirect($link);
      
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
