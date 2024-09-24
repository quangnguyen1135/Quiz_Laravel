<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from demo.frontted.com/flowdash/120/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 02:38:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="robots" content="noindex">

    <!-- App CSS -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
<body>
    @if (!isset($hideHeader) || !$hideHeader)
        @include('admin.layout.header')
    @endif

    @yield('content')

    @yield('script')
    @include('admin.layout.scripts')
    {{-- @if (!isset($hideFooter) || !$hideFooter)
        @include('admin.layout.footer')
    @endif --}}

</body>
<script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}assets/libs/nouislider/nouislider.min.js"></script>
<script src="{{ asset('/') }}assets/libs/wnumb/wNumb.min.js"></script>
<script src="{{ asset('/') }}assets/js/pages/ui-slider.js"></script>
<script src="{{ asset('/') }}assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>
