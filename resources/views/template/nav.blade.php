<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <div style="width:100px;">
            <a class="navbar-brand" href="{{ url('/')}}"><img style="width:100%" src="{{asset('assets/kuskus_logo.png')}}" alt="Kuskus Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-6">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a></li>
                @if(Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{ url('/profile')}}">Profile</a></li>
                @endif
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="
                    @if(Auth::check())
                    {{ url('/newpost')}}
                    @else
                    {{ url('/login')}}
                    @endif
                    ">BUAT THREAD</a></li>
                <li class="nav-item"><span class="nav-link">|</span></li>
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <div style="width: 22px;float: left;margin-top: 5px;margin-right: 10px;"><img style="width:100%" src="{{Auth::user()->foto}}" alt="Italian Trulli"></div>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->fullname}}</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(Auth::user()->role == 'admin')
                        <li class="dropdown-item"><a class="nav-link" href="{{ url('/formkategori')}}">Kategori</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="{{ url('/formuser')}}">Buat User Baru</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="{{ url('/formiklan')}}">Buat Iklan</a></li>
                        @endif
                        <li class="dropdown-item"><a class="nav-link" href="{{ url('/logout')}}">LOGOUT</a></li>
                    </ul>
                </li>
                
                @else
                <li class="nav-item"><a class="nav-link" href="{{ url('/login')}}">MASUK</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>