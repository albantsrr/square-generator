@extends('layouts.app')

@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

        <!--begin::Logo-->
        <a href="{{route('home')}}" class="mb-12">
            <img alt="Logo" src="{{asset('img/logo.svg')}}" class="h-40px" />
        </a>
        <!--end::Logo-->

        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" action="{{ route('login') }}" method="POST">

                @csrf

                <!--begin::Heading-->
                <div class="text-center mb-5">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In to QR</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">New Here?
                        <a href="{{route('register')}}" class="link-primary fw-bolder">Create an Account</a></div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="fv-plugins-message-container invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Input-->
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="fv-plugins-message-container invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center">

                    <!--begin::Submit button-->
                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Continue</span>
                    </button>
                    <!--end::Submit button-->

                    <!--begin::Separator-->
                    <div class="d-flex align-items-center mb-5">
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Google link-->
                    <a href="" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{asset('theme/media/svg/brand-logos/google-icon.svg')}}" class="h-20px me-3">
                        Continue with Google
                    </a>
                    <!--end::Google link-->
                    <!--begin::Google link-->
                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{asset('theme/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px me-3">
                        Continue with Facebook
                    </a>
                    <!--end::Google link-->

                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->

        </div>
        <!--end::Wrapper-->

    </div>
    <!--end::Content-->

@endsection
