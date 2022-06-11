<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-6" style="margin-left:auto; margin-right:auto">
                @foreach($category as $key => $data)
                    @if($data->status == 'tampilkan')
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/')}}">{{$data->jenis_kategori}}</a></li>
                    @endif
                    @endforeach
            </ul>
        </div>
    </div>
</nav>