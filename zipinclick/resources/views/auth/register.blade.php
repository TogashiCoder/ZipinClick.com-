{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

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
                                 <a href="index.html"
                                     class="breadcrumb-list__link text-body hover-text-main">{{ __('Home') }}</a>
                             </li>
                             <li class="breadcrumb-list__item font-14 text-body">
                                 <span class="breadcrumb-list__icon font-10"><i
                                         class="fas fa-chevron-right"></i></span>
                             </li>
                             <li class="breadcrumb-list__item font-14 text-body">
                                 <span class="breadcrumb-list__text">{{ __('Sign Up') }}</span>
                             </li>
                         </ul>

                         <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">{{ __('Sign Up') }}</h3>
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
                     <h2>{{ __('Welcome back!') }}</h2>
                     <p>{{ __('sign up to continue') }}</p>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                         <div class="row">
                             <div class="col-xl-12">
                                 <div class="wsus__login_imput">
                                     <label>{{ __('Name') }}</label>
                                     <input type="text" placeholder="Name" name="name" :value="{{ old('name') }}" required autofocus autocomplete="name">
                                     <x-input-error :messages="$errors->first('name')" class="mt-2" />
                                    </div>
                             </div>
                             <div class="col-xl-12">
                                 <div class="wsus__login_imput">
                                     <label>{{ __('Email') }}</label>
                                     <input type="email" placeholder="Email" name="email" :value="{{ old('email') }}" required autocomplete="username">
                                     <x-input-error :messages="$errors->first('email')" class="mt-2" />
                                    </div>
                             </div>
                             <div class="col-xl-12">
                                 <div class="wsus__login_imput">
                                     <label>{{ __('Password') }}</label>
                                     <input type="password" placeholder="Password" name="password" required autocomplete="new-password">
                                     <x-input-error :messages="$errors->first('password')" class="mt-2" />
                                 </div>
                             </div>
                             <div class="col-xl-12">
                                 <div class="wsus__login_imput">
                                     <label>{{ __('Confirm password') }}</label>
                                     <input type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                     <x-input-error :messages="$errors->first('password_confirmation')" class="mt-2" />
                                    </div>
                             </div>

                             <div class="col-xl-12">
                                 <div class="wsus__login_imput">
                                     <button type="submit" class="btn btn-main btn-lg">{{ __('Sign Up') }}</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                     <p class="create_account mt-2">{{ __('have an aceount ? ') }}<a href="{{ route('login') }}">{{ __('Sing In') }}</a></p>
                 </div>
             </div>
         </div>
     </div>
 </section>

@endsection
