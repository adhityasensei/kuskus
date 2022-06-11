{{-- Header --}}
@include('template.header')
<!-- Navigation-->
@include('template.nav')
<!-- Banner-->
@include('template.banner')
<!-- subnav-->
@include('template.subnav')
<!-- Section content-->
@yield('content')
<!-- Section kanan-->
@yield('content.rightcontent')
<!-- Footer-->
@include('template.footer')