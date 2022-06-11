@extends('layout.layoutLogin')

@section('title', 'Auth')

@section('content')
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
<div class="container">
  <form method="POST" action="/doLogin">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{ url('/formuser')}}">Belum Punya Akun?</a>  
</div>
@endsection