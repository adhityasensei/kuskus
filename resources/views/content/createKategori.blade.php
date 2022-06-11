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
<form method="post" name="loginform" action="{{ url('/createCategory') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <input type="text" class="form-control"  placeholder="Kategori Baru" name="jenis_kategori" id="jenis_kategori">
    </div>
    <div class="form-group mb-3">
        <select name="status" class="form-control" >
            <option value="" selected>Pilih Status Kategori</option>
            <option value="tampilkan">Tampilkan</option>
            <option value="tidak_ditampilkan">Tidak Tampilkan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection