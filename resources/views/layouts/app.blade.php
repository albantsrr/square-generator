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
<body class="bg-white">

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('theme/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('theme/js/scripts.bundle.js')}}"></script>
<!--end::Javascript-->

<nav class="navbar navbar-white bg-white justify-content-between mb-5 mt-5">
    <a class="navbar-brand mx-10">Logo</a>

    <form class="form-inline">
        @if(Auth::user())
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">logout</button>
        @else
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Sign in</button>
            <button class="btn btn-outline-dark my-2 my-sm-0 bg-primary text-white mx-10" type="submit">Sign up</button>
        @endif
    </form>
</nav>


    @yield('content')


    @yield('script')
</body>
</html>
