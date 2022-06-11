@extends('layouts.app')

@section('title', 'Login User')

@section('content')

<form method="post" name="loginform" action="{{ url('daftar_user') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Your Name" name="Name" id="inputName">
    <br><br>
    <input type="text" placeholder="Your E-Mail" name="email" id="inputEmail">
    <br><br>
    <input type="password" placeholder="Your password" name="password" id="inputEmail">
    <br><br>
    <select name="role" >
    <option value="user">user</option>
    <option value="admin">admin</option>
    <option value="manager">manager</option>
  </select>
    <br><br>
    <input type="file" placeholder="Your Foto" name="Foto" id="inputFoto">
    <br><br>
    <input type="submit" value="Login">
</form>


@endsection