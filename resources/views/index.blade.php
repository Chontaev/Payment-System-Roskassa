@extends('loyauts.app')
@section('content')
    
  <div class="container mt-5 mx-auto d-flex flex-wrap">
    @foreach ($products as $product)
    <div class="p-2 mx-auto">
      <div class="card" style="width: 18rem;">
        <div style="width: 100% ;height:150px" class="bg-dark"></div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item navbar-brand">{{$product->name}}</li>
          <li class="list-group-item">{{$product->amount}} <small class="text-muted">/ {{$product->currency}}</small></li>
        </ul>
        <div class="card-body">
          <a href="{{route('main.show',$product->id)}}" class="btn btn-lg btn-block btn-primary mt-5">Купить</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
@endsection