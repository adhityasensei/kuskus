@extends('layout.layoutLogin')

@section('title', 'Buat Iklan')

@section('content')
<div class="container bg-light clearfix" style="margin-top:20px; margin-bottom:130px">
    @if(isset($errors))
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif
    @if(session('success') != NULL)
    <li>{{ session('success') }}</li>
    @endif
    <div style="margin:2%">
        <h2 class="mb-4">BUAT IKLAN BARU</h2>
    <form method="post" name="loginform" action="{{ url('/createiklan') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
        <label for="judul_iklan" class="form-label" style="font-weight:bold;">Judul Iklan</label>
        <input type="text" class="form-control"  placeholder="Judul Iklan" name="judul_iklan" id="judul_iklan">
    </div>
    <div class="form-group mb-4">
        <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi Iklan</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="15"></textarea>
    </div>
    <div class="form-group mb-4">
        <label for="foto" class="form-label" style="font-weight:bold;">Foto Iklan</label>
        <input type="file" class="form-control" placeholder="Your Foto" name="foto" id="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection