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

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand mx-10 ">Logo</a>
    <div class="collapse navbar-collapse justify-content-end mx-10" id="navbarNavDropdown" >
    <ul class=" navbar-nav ml-auto ">
        @if(Auth::user())

            <li class="nav-item">
                <a class="btn btn-success" type="submit" href="{{route('login')}}">Espace admin</a>
            </li>
           <li class="nav-item">
               <form method="POST" action="{{route('logout')}}">
                   @csrf
                   <button type="submit" class="btn btn-danger">Déconnexion</button>
               </form>
           </li>
        @else
            <li class="nav-item">
                <a class="nav-link" type="submit" href="{{route('login')}}">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}"type="submit">Sign up</a>
            </li>
        @endif
    </ul>
    </div>

</nav>



    @yield('content')


    @yield('script')
</body>
</html>
