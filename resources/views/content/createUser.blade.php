@extends('layout.layoutLogin')

@section('title', 'Kuskus Food Forum')

@section('content')
<div class="container">
    @if(isset($errors))
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif
    @if(session('success') != NULL)
    <li>{{ session('success') }}</li>
    @endif
    @if(Auth::check())
    @if(Auth::user()->role == 'admin')
    <form method="post" name="loginform" action="{{ url('/createUserAdmin') }}" enctype="multipart/form-data">
    @endif
    @endif
    <form method="post" name="loginform" action="{{ url('/createUser') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <input type="text" class="form-control"  placeholder="Full Name" name="name" id="name">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control"  placeholder="E-Mail" name="email" id="email">
    </div>
    <div class="form-group mb-3">
        <input class="form-control"  type="password" placeholder="Password" name="password" id="password">
    </div>
    @if(Auth::check())
    @if(Auth::user()->role == 'admin')
    <div class="form-group mb-3">
        <select name="role" class="form-control" >
            <option value="" selected>Pilih Role User</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
            <option value="manager">manager</option>
        </select>
    </div>
    @endif
    @endif
    <div class="form-group mb-3">
        <input class="form-control"  type="text" placeholder="Yout Deskripsion" name="deskripsi" id="deskripsi">
    </div>
    <div class="form-group mb-3">
        <input type="file" class="form-control" placeholder="Your Foto" name="foto" id="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection