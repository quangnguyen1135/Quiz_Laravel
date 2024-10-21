<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="icon" href="{{ asset('/') }}favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('/') }}asset/css/index-7c9ad8fa.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/index-BqBi4gPc.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/QuestionPreviewCard-DPfL1K_n.css" rel='stylesheet' type='text/css'
        media='all' />
    <link href="{{ asset('/') }}asset/css/main.Ct5vyuaT.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/Summary.CrjjCI_Q.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/main.CjpXqxb4.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/InGameApp.cq3-fSNa.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/Summary.DCasJ6_v.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/index-D9zRUiTE.css" rel='stylesheet' type='text/css' media='all' />
    <link href="{{ asset('/') }}asset/css/main.css" rel='stylesheet' type='text/css' media='all' />
    @vite('resources/js/app.js')

    <title>@yield('title', 'Custom Auth Laravel')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div>
        @if (!isset($hideHeader) || !$hideHeader)
            @include('layout.header')
        @endif

        @yield('content')
        @yield('script')
        @include('layout.scripts')
        @if (!isset($hideFooter) || !$hideFooter)
            @include('layout.footer')
        @endif
    </div>

</body>

</html>
