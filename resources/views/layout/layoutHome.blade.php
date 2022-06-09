{{-- Header --}}
@include('template.header')
<!-- Navigation-->
@include('template.nav')
<!-- Banner-->
@include('template.banner')
<!-- Section kiri-->
@yield('content.leftcontent')
<!-- Section kanan-->
@yield('content.rightcontent')
<!-- Footer-->
@include('template.footer')