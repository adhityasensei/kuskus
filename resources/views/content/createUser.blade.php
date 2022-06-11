@extends('layout.layoutLogin')

@section('title', 'Kuskus Food Forum')

@section('content')
<div class="container bg-light clearfix" style="margin-top:20px;">
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
    <div style="margin:2%">
        <h2 class="mb-4">BUAT USER BARU</h2>
    <div class="form-group mb-4">
        <label for="name" class="form-label" style="font-weight:bold;">Fullname</label>
        <input type="text" class="form-control"  placeholder="Full Name" name="name" id="name">
    </div>
    <div class="form-group mb-4">
        <label for="email" class="form-label" style="font-weight:bold;">Email</label>
        <input type="text" class="form-control"  placeholder="E-Mail" name="email" id="email">
    </div>
    <div class="form-group mb-4">
        <label for="password" class="form-label" style="font-weight:bold;">Password</label>
        <input class="form-control"  type="password" placeholder="Password" name="password" id="password">
    </div>
    @if(Auth::check())
    @if(Auth::user()->role == 'admin')
    <div class="form-group mb-4">
        <label for="role" class="form-label" style="font-weight:bold;">Role User</label>
        <select name="role" class="form-control" >
            <option value="" selected>Pilih Role User</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
            <option value="manager">manager</option>
        </select>
    </div>
    @endif
    @endif
    <div class="form-group mb-4">
        <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi User</label>
        <input class="form-control"  type="text" placeholder="Yout Deskripsion" name="deskripsi" id="deskripsi">
    </div>
    <div class="form-group mb-4">
        <label for="foto" class="form-label" style="font-weight:bold;">Foto User</label>
        <input type="file" class="form-control" placeholder="Your Foto" name="foto" id="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection