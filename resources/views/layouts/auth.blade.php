<!doctype html>
<html lang="en">
<head>
    <title>@yield('head_title', 'qrcode')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('theme/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::css-->

    @yield('header')
</head>
<body>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('theme/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('theme/js/scripts.bundle.js')}}"></script>
<!--end::Javascript-->

@yield('content')


@yield('script')
</body>
</html>
