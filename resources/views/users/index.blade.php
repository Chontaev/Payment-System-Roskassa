@extends('loyauts.admin')
@section('content')
    
  <div class="container mt-5 col-9 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
      <h2>Пользователи<h2>
    </div>
    <table class="table table-striped pt-5 mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col" >Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          @if ($user->active)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->email}}</td>
            <td>
              @if($user->role_id==0) Пользователь
              @else Админ
              @endif
              </td>
            <td>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
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