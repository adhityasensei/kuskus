<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- //lokasi file public/css/bootstrap.css -->
        <link href="{{asset('/css/bootstrap.css')}}"
    rel="stylesheet">
    </head>
    <body>
        @if(session()->has('success'))
            {{session('success')}}
        @endif
        {{ Auth::user()->name }}
    @include('layouts.header')

    <div class="container">
    @yield('content')
    </div>

    @include('layouts.footer')
    </body>
</html>