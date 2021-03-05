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
      	$rand = rand();
        $sign = array(
            'amount'=>$request->amount,
            'order_id'=>$rand,
            'shop_id'=>'9CFF252E3074FC9682187D5165A6DF33',
            'currency'=>$request->currency,
            'test' =>1,
        );
        ksort($sign);
        $str = http_build_query($sign);
        $key = md5($str . $secret);
       $payment = new Payment();
       $payment->id = $rand;
       $payment->amount=$request->amount;
       $payment->email=$request->email;
       $payment->order_id=$rand;
       $payment->currency=$request->currency;
       $payment->shop_id=$request->shop_id;
       $payment->lang=$request->lang;
       $payment->payment_done=false;
       $payment->sign = $key;
       $payment->save();
        $request = array(
            'amount'=>$request->amount,
            'order_id'=>$rand,
            'shop_id'=>'9CFF252E3074FC9682187D5165A6DF33',
            'currency'=>$request->currency,
            'sign' =>$key,
            'test' =>1,
        );
        $link = 'https://pay.roskassa.net/?'.http_build_query($request);
        return redirect($link);
      
    }
    public function setData(){
        $secret = 'Ild5m1Jf';
        $data = $_POST;
        unset($data["sign"]);
        ksort($data);
        $str = http_build_query($data);
        $sign = md5($str . $secret);
        $section = Payment::find($_POST['order_id']);
        if($_POST["sign"] == $sign){
          $section->payment_done=true;
	  	  $section->save();
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
