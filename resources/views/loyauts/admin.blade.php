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
  @if (session('success'))
  <div class="container alert" style="position:absolute" role="alert">
      <li>{{ session('success') }}</li>
  </div>
@endif
@if ($errors->any())
  <div class="flex posaition items-center justify-center bg-gray-50 ">
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
  <a class="navbar text-white" href="{{route('logout')}}">Users</a>
</div>
<a class="navbar text-white pr-5" href="{{route('logout')}}">Logout</a>
</nav>
@yield('content')
</body>
</html>