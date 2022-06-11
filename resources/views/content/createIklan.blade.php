@extends('layout.layoutLogin')

@section('title', 'Buat Iklan')

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
    <form method="post" name="loginform" action="{{ url('/createiklan') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <input type="text" class="form-control"  placeholder="Judul Iklan" name="judul_iklan" id="judul_iklan">
    </div>
    <div class="form-group mb-3">
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="15"></textarea>
    </div>
    <div class="form-group mb-3">
        <input type="file" class="form-control" placeholder="Your Foto" name="foto" id="foto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection