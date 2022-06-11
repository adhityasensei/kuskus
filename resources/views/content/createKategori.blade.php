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
<div style="margin:2%">
    <h2 class="mb-4">BUAT KATEGORI BARU</h2>
<form method="post" name="loginform" action="{{ url('/createCategory') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
        <label for="jenis_kategori" class="form-label" style="font-weight:bold;">Jenis Kategori</label>
        <input type="text" class="form-control"  placeholder="Kategori Baru" name="jenis_kategori" id="jenis_kategori">
    </div>
    <div class="form-group mb-4">
        <label for="status" class="form-label" style="font-weight:bold;">Status Kategori</label>
        <select name="status" class="form-control" >
            <option value="" selected>Pilih Status Kategori</option>
            <option value="tampilkan">Tampilkan</option>
            <option value="tidak_ditampilkan">Tidak Tampilkan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection