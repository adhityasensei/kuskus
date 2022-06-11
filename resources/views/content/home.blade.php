@extends('layout.layoutHome')

@section('title', 'Kuskus Food Forum')

@section('content')
<div class="col-lg-6" style="float:left">
    <div class="container" style="margin-bottom:180px">
        <div class="col-lg-12 bg-light" style="margin-left:auto; margin-right:auto; margin-top:25px; border: 1px solid #d9dadc">
            <div class="container">
                <div class="clearfix">
                    <div class="col-lg-12" style="float:left; margin:5%">
                        <div class="col-lg-12 "><span style="color:black; font-size:20px">Hot Thread</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 bg-light" style="margin-left:auto; margin-right:auto; margin-top:25px; border: 1px solid #d9dadc">
            <div class="container">
                @foreach($hotthread as $key => $data)
                <div class="clearfix" style="border-bottom: 1px solid #d0d0d0; padding-bottom: 10px; margin-top: 10px;">
                    <a aria-current="page" href="{{ url('/')}}" style="text-decoration:none;">
                        <div class="col-lg-2" style="float:left; margin-top: 3px; width: 45px;">
                            <img style="width:100%" src="{{asset('assets/icon_K.png')}}"  alt="Kuskus icon">
                        </div>
                        <div class="col-lg-8 clearfix" style="margin-left:60px">
                            <div class="col-lg-12 "><span style="color:black; font-size:12px">{{$data->kategori}}</span></div>
                            <div class="col-lg-12 ">
                                <span style="color:rgb(124, 124, 124); font-size:10px">{{$data->namauser}} • {{$data->waktupost}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12 clearfix">
                            <span style="color:black; font-size:20px; margin-top:10px">{{$data->judul}}</span>
                        </div>
                        <div class="col-lg-12">
                            <img style="width:100%" src="{{asset('assets/kuskus_logo.png')}}"  alt="Kuskus icon">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection