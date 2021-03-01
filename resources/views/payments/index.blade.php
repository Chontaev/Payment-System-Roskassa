@extends('loyauts.admin')
@section('content')
    
  <div class="container mt-5 col-9 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
      <h2>Проданные товары</h2>
    </div>
    <div class="pr-5 mx-5 pt-2">
      <a class="navbar-brand text-success" href="{{route('paymentListPayed')}}">Оплаченные</a>
      <a class="navbar-brand text-danger" href="{{route('paymentListNotPayed')}}">Не оплаченные</a>
    </div>
    <table class="table table-striped pt-2 mt-4">
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
          <tr>
            <th scope="row">{{$payment->id}}</th>
            <td>{{$payment->email}}</td>
            <td>{{$payment->amount}}  {{$payment->currency}}</td>
            <td>{{$payment->order_id}}</td>
            <td>
              @if($payment->paymnet_done) Оплатили
              @else Не оплатили</td>
              @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection