
@extends('frontend.layouts.master')

@section('content')
    <!-- ======================== Breadcrumb Two Section Start ===================== -->
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1"
        style="background: url(assets/images/thumbs/breadcrumb_bg.jpg);">
        <div class="breadcrumb-two">
            <img src="{{ asset('assets/frontend/images/thumbs/breadcrumb_bg.jpg') }}" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{ route('home') }}" class="breadcrumb-list__link text-body hover-text-main">{{ __('Home') }}</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">{{ __('Reset Password') }}</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">{{ __('Forget Password') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <section class="wsus__login padding-y-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                      <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <div class="wsus__login_area">
                        <h2>{{__('Welcome back!')}}</h2>
                        <p class="text-muted"> {{ __('Forgot Your Password? Recover Your Account') }}</p>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>{{ __('Email') }}</label>
                                        <input placeholder="Email" type="email" name="email" :value="{{ old('email') }}" required autofocus >
                                        <x-input-error :message="$errors->first('email')" class="mt-2" />
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <button type="submit" class="btn btn-main btn-lg">{{ __('Email Password Reset Link') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="create_account">{{ __('Don’t have an account ?') }} <a href="{{ route('register') }}">{{ __('Sign Up') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
