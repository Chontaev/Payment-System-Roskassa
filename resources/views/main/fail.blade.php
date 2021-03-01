@extends('loyauts.app')
@section('content')
    
  <div class="container mt-5 text-center pt-5">
    <img src="https://media.istockphoto.com/vectors/white-cross-sign-on-red-circle-background-vector-id1132286266?k=6&m=1132286266&s=170667a&w=0&h=LJcf98QHLJaIZTJy6XyF4LR73fzlznDdIjV0V0z3s24=" alt="">
    <h2>Не удалось оплатить платеж!</h2>
    <a href="{{route('index')}}">Вернуться на страницу оплаты</a>
  </div>
@endsection
