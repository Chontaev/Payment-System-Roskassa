@extends('loyauts.admin')
@section('content')
  <div class='col-8 mx-auto pt-5'>
    <a href="{{route('products.index')}}"><< Вернуться</a>
  </div>
  <div class="container mt-5 col-5 mx-auto">
    <form method="POST" action="{{route('products.store')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="post">
      <div class="form-group col-12">
        <label for="name">Название товара</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group col-12">
        <label for="amount">Стоимость товара</label>
        <input type="number" class="form-control" id="amount" name="amount" >
      </div>
      <div class="form-group col-6">
        <label for="currency">Валюта оплаты</label>
        <select class="form-control" id="currency" name="currency">
          <option>USD</option>
          <option>RUB</option>
          <option>EUR</option>
          <option>SOM</option>
        </select>
      </div>
      <button class="btn btn-primary ml-3">Добавить товар</button>
    </form>
  </div>
@endsection