@extends('loyauts.app')
@section('content')
    
<form method="post" action="{{route('store')}}" class="form-signin pt-5 mt-5 col-3 mx-auto">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="post">
  <div class="form-label-group mt-5">
    <label for="inputEmail" class="pt-2">Email address</label>
    <input type="email" id="inputEmail" class="form-control pt-2" placeholder="Email address" name="email" required="" autofocus="">
  </div>

  <div class="form-label-group">    
    <label for="inputPassword" class="pt-2">Password</label>
    <input type="password" id="inputPassword" class="form-control pt-2" placeholder="Password" name="password" required="">
  </div>

  <div class="form-label-group">    
    <label for="inputPassword" class="pt-2">Password Confirm</label>
    <input type="password" id="inputPassword" name="password_confirm" class="form-control pt-2" placeholder="Password Confirm" required="">
  </div>

  <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign up</button>
  <p class="mt-5 mb-3 text-muted text-center">© 2021</p>
</form>


@endsection