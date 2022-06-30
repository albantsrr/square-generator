@extends('layouts.app')

@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

        <!--begin::Logo-->
        <a href="{{route('home')}}" class="mb-5">
            <img alt="Logo" src="{{asset('img/qrcode.png')}}" class="h-30px" />
        </a>
        <!--end::Logo-->

        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" action="{{route('register')}}" method="POST">

                @csrf

                <!--begin::Heading-->
                <div class="mb-5 text-center">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Create an Account</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                        <a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
                    <input id="email" autofocus type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="fv-plugins-message-container invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6" for="name">Name</label>
                    <input id="name" autofocus type="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                    @error('name')
                    <span class="fv-plugins-message-container invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6" for="password">Password</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="fv-plugins-message-container invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6" for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <span class="form-check-label fw-bold text-gray-700 fs-6">By registering, you agree to our
                                <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                    </label>
                </div>
                <!--end::Input group-->

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
                    Sign in with Google
                </a>
                <!--end::Google link-->
                <!--begin::Google link-->
                <a href="" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                    <img alt="Logo" src="{{asset('theme/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px me-3">
                    Sign in with Facebook
                </a>
                <!--end::Google link-->

            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
@endsection
