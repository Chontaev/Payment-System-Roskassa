<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="rk-verification" content="5dbaaf9273b1fd85bc081c00c21a0db6" />
  <title>RoscassaPay</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  @if (session('danger'))
            <div class="modal text-danger pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
                <li>{{ session('danger') }}</li>
            </div>
        @endif
    @if (session('success'))
    <div class="modal text-success pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
        <li>{{ session('success') }}</li>
    </div>
    @endif
        @if ($errors->any())
          <div class="modal text-danger pt-5 mt-5 mx-5 px-5" style="position:absolute;" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> 
                    @endforeach
                </ul>
            </div>
        @endif
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white justify-content-between">
    <a class="navbar text-white pl-5" href="{{route('index')}}">Main</a>
    
    @if(!Auth::check())
      <a class="navbar text-white pr-5" href="{{route('login')}}">Login</a>
    @else
    <div class="pr-5 d-flex">
      @if (Auth::check()&&Auth::user()->role_id==2)
      <a class="navbar text-white" href="{{route('products.index')}}">panel</a>
      @endif
      <a class="navbar text-white " href="{{route('logout')}}">Logout</a></div>
    @endif
  </nav>
@yield('content')
</body> 
</html>