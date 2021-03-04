@extends('loyauts.app')
@section('content')
    <div class="col-5  mx-auto pt-5 mt-5">
    <form method="post" id="submit" action="https://pay.roskassa.net/form/" enctype="utf-8">
      <input type="hidden" name="shop_id" value="{{$payment->shop_id}}"> 
      <input type="hidden" name="order_id" value="{{$payment->order_id}}">
      <input type="hidden" name="currency" value="{{$payment->currency}}">
      <input type="hidden" name="sign" value="{{$payment->sign}}">
      <input type="hidden" name="amount" value="{{$payment->amount}}">
      <input type="hidden" name="payment_system" value="11">         
      <p>Вы будете переноправлены через несколько секунд ...</p>
      <p class="align-items-center">Чтобы не жать нажмите на кнопку <button type="submit" class="btn btn-primary mt-2 md-2">Оплатить</button></p>
    </form>
    </div>
    <script>
      const form  = document.getElementById('submit');
      function getpay(){
        form.submit();
      }
      setTimeout(getpay,3000);
    </script>
@endsection
