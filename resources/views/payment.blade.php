@extends('loyauts.app')
@section('content')
    <div class="col-5  mx-auto pt-5 mt-5">
    <form method="post" id="submit" action="https://pay.roskassa.net/form/">
      <input type="hidden" name="_method" value="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="shop_id" value="{{$data['shop_id']}}"> 
      <input type="hidden" name="order_id" value="{{$data['order_id']}}">
      <input type="hidden" name="lang" value="ru">
      <input type="hidden" name="currency" value="{{$data['currency']}}">
      <input type="hidden" name="sign" value="$sing">
      <input type="hidden" name="amount" value="{{['$data->amount']}}">       
      <p>Вы будете переноправлены через несколько секунд ...</p>
      <p class="align-items-center">Чтобы не жать нажмите на кнопку <button type="submit" class="btn btn-primary mt-2 md-2">Оплатить</button></p>
    </form>
    </div>
    <script>
      const form  = document.getElementById('submit');
      console.log(form);
      function getpay(){
        form.submit();
      }
      setTimeout(getpay,3000);
    </script>
@endsection
