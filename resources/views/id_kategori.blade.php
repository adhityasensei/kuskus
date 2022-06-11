@extends('layouts.app')

@section('title', 'Login User')

@section('content')

<form method="post" name="loginform" action="{{ url('daftar_user') }}" enctype="multipart/form-data">
    @csrf
    <br><br>
    <select name="id_kategori" >
    <option value="asiafood">asiafood</option>
    <option value="indonesiafood">indonesiafood</option>
    <option value="eropafood">eropafood</option>
    <option value="amerikafood">amerikafood</option>
  </select>
    <br><br>
    <input type="file" placeholder="Your Foto" name="Foto" id="inputFoto">
    <br><br>
    <input type="submit" value="Login">
    <br><br>
    <input type="text" placeholder="Your judul" name="judul" id="inputJudul">
    <br><br>
    <input type="textarea" placeholder="Your isi_post" name="isi_post" id="inputIsiPost">
    <br><br> 
    <input type="text" placeholder="Your id_user" name="id_user" id="inputIDUser">
    <br><br>
    <input type="text" placeholder="Your view" name="view" id="inputView">
    <br><br>
</form>


@endsection