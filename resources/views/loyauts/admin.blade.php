<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="rk-verification" content="5dbaaf9273b1fd85bc081c00c21a0db6" />
  <title>Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    @if (session('danger'))
              <div class="text-danger pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
                  <li>{{ session('danger') }}</li>
              </div>
          @endif
      @if (session('success'))
      <div class="text-success pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
          <li>{{ session('success') }}</li>
      </div>
      @endif
@if ($errors->any())
    <div class="text-danger pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
      <ul>
          @foreach ($errors->all() as $error)
              <h3>{{ $error }}</h3> 
          @endforeach
      </ul>
  </div>
@endif
<nav class="navbar  navbar-dark bg-dark justify-content-between">
<div class="d-flex px-5">
  <a class="navbar text-white" href="{{route('index')}}">Main</a>
  <a class="navbar text-white" href="{{route('products.index')}}">Products</a>
  <a class="navbar text-white" href="{{route('paymentList')}}">Payments</a>
  <a class="navbar text-white" href="{{route('users.index')}}">Users</a>
</div>
<a class="navbar text-white pr-5" href="{{route('logout')}}">Logout</a>
</nav>
@yield('content')
</body>
</html>