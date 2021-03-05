@extends('loyauts.app')
@section('content')
    
  <div class="container mt-5 text-center pt-5">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRrVKe8Sr3Xkie8-dm36FAg77rNWrLFM_jHg&usqp=CAU" alt="">
    <h2>Платеж успешно выполнен</h2>
    <a href="{{route('index')}}">Вернуться на страницу оплаты</a>
  </div>
@endsection
