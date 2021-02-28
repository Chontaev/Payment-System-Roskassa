@extends('loyauts.admin')
@section('content')
    
  <div class="container mt-5 col-9 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
      <h2>Править товары</h2>
      <a href="{{route('products.create')}}" class="btn btn-primary">создать товар</a>
    </div>
    <table class="table table-striped pt-5 mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Amount</th>
          <th scope="col">Currency</th>
          <th scope="col" >Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          @if ($product->active)
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->amount}}</td>
            <td>{{$product->currency}}</td>
            <td>
              <form action="{{route('products.destroy',$product->id)}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-danger">delete</button>
              </form>
            </td>
          </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
@endsection