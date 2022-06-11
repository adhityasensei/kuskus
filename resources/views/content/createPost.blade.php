@extends('layout.layoutLogin')

@section('title', 'New Thread')

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
    <form method="post" name="threadform" action="{{ url('/createPost') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <select name="id_kategori" class="form-control" >
            <option value="" selected>Pilih Kategori</option>
            @foreach($category as $key => $data)
            <option value="{{$data->id}}">{{$data->jenis_kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control"  placeholder="Judul Thread" name="judul" id="judul">
    </div>
    <div class="form-group mb-3">
        <textarea class="form-control" id="isi_thread" name="isi_thread" rows="15"></textarea>
    </div>
    <div class="form-group mb-3">
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
@endsection