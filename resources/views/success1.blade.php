@extends('loyauts.app')
@section('content')
<form action="https://cx37765.tmweb.ru/response" method='post'>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="post">
  <input type="submit">
  <input name='text' type="text"></form>
@endsection