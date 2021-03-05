@extends('loyauts.app')
@section('content')
    <div class="col-8  mx-auto pt-5">
      <a href="{{route('index')}}"><< Вернуться</a>
    </div>
  <div class="container mt-5 col-4 mx-auto border p-4">
    <h2>Оплата товара</h2>
    <form method="post" action="{{route('getPay')}}">
      <input type="hidden" name="_method" value="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="email" value="{{Auth::user()->email}}">
      <input type="hidden" name="shop_id" value="9CFF252E3074FC9682187D5165A6DF33"> 
      <input type="hidden" name="order_id" value={{rand()}}>
      <input type="hidden" name="lang" value="ru">
      <input type="hidden" name="test" value="1">
      <input type="hidden" name="currency" value="{{$product->currency}}">
      <input type="hidden" name="amount" value="{{$product->amount}}">       
      <p>сумма оплаты </p>
      <h4 style="margin-top:-10px">{{$product->amount}} {{$product->currency}}</h4>
      <div class="md-2">
      <button type="submit" class="btn btn-primary mt-2 md-2">Оплатить</button>
      </div>
    </form>

  </div>
@endsection