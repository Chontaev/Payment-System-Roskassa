@extends('loyauts.app')
@section('content')
    
<form method="post" action="{{route('authenticate')}}" class="form-signin pt-5 mt-5 col-3 mx-auto">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="post">
  <div class="form-label-group mt-5">
    <label for="inputEmail" class="pt-2">Email address</label>
    <input type="email" id="inputEmail" class="form-control pt-2" name="email" placeholder="Email address" required="" autofocus="">
  </div>

  <div class="form-label-group">    
    <label for="inputPassword" class="pt-2">Password</label>
    <input type="password" id="inputPassword" class="form-control pt-2" name="password" placeholder="Password" required="">
  </div>
  <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
  <div class="pt-4 d-flex justify-content-between">
    <a class="d-block text-muted text-dark" href="{{route('register')}}">Регистрация</a>
    <p class="text-muted">© 2021</p>
  </div>
</form>


@endsection