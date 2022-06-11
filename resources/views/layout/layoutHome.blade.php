{{-- Header --}}
@include('template.header')
<!-- Navigation-->
@include('template.nav')
<!-- Banner-->
@include('template.banner')
<!-- subnav-->
@include('template.subnav')
<!-- Section kiri-->
@include('content.leftcontent')
<!-- Section content-->
@yield('content')
<!-- Section kanan-->
@include('content.rightcontent')
<!-- Footer-->
</div>
{{-- @include('template.footer') --}}