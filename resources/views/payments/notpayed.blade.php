@extends('loyauts.admin')
@section('content')
    
  <div class="container mt-5 col-9 mx-auto">
    <div>
      <h2>Проданные товары</h2>
      <a  href="{{route('paymentList')}}"><< Вернуться к странице payment</a>
    </div>
    <table class="table table-striped pt-5 mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">User Email</th>
          <th scope="col">Amount Currency</th>
          <th scope="col">Product</th>
          <th scope="col" >Done</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
          @if (!$payment->paymnet_done)
            <tr>
              <th scope="row">{{$payment->id}}</th>
              <td>{{$payment->email}}</td>
              <td>{{$payment->amount}}{{$payment->currency}}</td>
              <td>{{$payment->order_id}}</td>
              <td>{{$payment->paymnet_done}}</td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
@endsection