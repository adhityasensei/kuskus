<div style="width:100%;">
    <div class="col-lg-3" style="float:left;">
        <div class="container">
            <div class="col-lg-10  bg-light" style="margin-left:auto; margin-right:auto; margin-top:25px; border: 1px solid #d9dadc">
                <div style="margin:5%">
                    <span style="font-weight:bold">Pojok Iklan Kuskus</span>
                    <div style="margin-top:20px">
                        @foreach($iklan as $key => $data)
                        <div style="border-bottom: 1px solid #d0d0d0; padding-bottom: 10px; margin-top: 10px;">
                            <a aria-current="page" href="{{ url('/')}}" style="text-decoration:none;">
                                <div class="col-lg-12 clearfix" style="float:left; margin-top: 3px; height:150px;">
                                    <img style="width:100%" src="{{$data->foto}}"  alt="Kuskus icon">
                                </div>
                                <div class="col-lg-12 clearfix">
                                    <div class="col-lg-12 "><span style="color:black; font-size:14px">{{$data->judul_iklan}}</span></div>
                                    <div class="col-lg-12 ">
                                        <span style="color:rgb(124, 124, 124); font-size:12px">{{$data->deskripsi}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
