@extends('layout.layoutLogin')

@section('title', 'New Thread')

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
        <h2 class="mb-4">BUAT THREAD BARU</h2>
    <form method="post" name="threadform" action="{{ url('/createPost') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
        <label for="id_kategori" class="form-label" style="font-weight:bold;">Kategori Thread</label>
        <select name="id_kategori" class="form-control" >
            <option value="" selected>Pilih Kategori</option>
            @foreach($category as $key => $data)
            <option value="{{$data->id}}">{{$data->jenis_kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-4">
        <label for="judul" class="form-label" style="font-weight:bold;">Judul Thread</label>
        <input type="text" class="form-control"  placeholder="Judul Thread" name="judul" id="judul">
    </div>
    <div class="form-group mb-4">
        <label for="isi_thread" class="form-label" style="font-weight:bold;">Isi Thread</label>
        <textarea class="form-control" id="isi_thread" name="isi_thread" rows="15"></textarea>
    </div>
    <div class="form-group mb-4">
        <label for="status" class="form-label" style="font-weight:bold;">Status Thread</label>
        <select name="status" class="form-control" >
            <option value="" selected>Pilih Status Thread</option>
            <option value="tampilkan">Tampilkan</option>
            <option value="tidak_ditampilkan">Tidak ditampilkan</option>
            @if(Auth::user()->role == 'admin')
            <option value="dihapus">Di Hapus</option>
            @endif
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection