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
                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">{{ __('Reset Password') }}</h3>
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
                    <div class="wsus__login_area">
                        <h2>{{ __('Reset Password') }}</h2>
                        <p class="text-muted">{{ __('Create a new password for your account') }}</p>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="row">
                                <!-- Email Address -->
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput mb-3">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        {{-- @error('email')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput mb-3">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        {{-- @error('password')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput mb-3">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        {{-- @error('password_confirmation')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <button type="submit" class="btn btn-main btn-lg">{{ __('Reset Password') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="create_account">{{ __('Remember your password?') }} <a href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
