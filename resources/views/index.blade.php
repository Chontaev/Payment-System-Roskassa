@extends('loyauts.app')
@section('content')
    
  <div class="container mt-5 mx-auto d-flex flex-wrap">
    @foreach ($products as $product)
    <div class="p-2 mx-auto">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$product->name}}</h4>
        </div>
        <div class="card-body">
          <h3 class="card-title pricing-card-title">{{$product->amount}} <small class="text-muted">/ {{$product->currency}}</small></h3>
          <a href="{{route('main.show',$product->id)}}" class="btn btn-lg btn-block btn-primary mt-5">Купить</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
@endsection