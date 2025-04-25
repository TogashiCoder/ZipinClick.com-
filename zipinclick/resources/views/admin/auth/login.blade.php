<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ __('Admin Login') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/admin/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="{{ asset('assets/admin/js/demo-theme.min.js') }}"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">{{ __('Login to your account') }}</h2>
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
              <div class="mb-3">
                <label class="form-label">{{ __('Email address') }}</label>
                <input type="email" class="form-control" placeholder="your@email.com"   name="email" :value="old('email')"  required autofocus>
                <x-input-error :message="$errors->first('email')" class="mt-2" />
            </div>
              <div class="mb-2">
                <label class="form-label">
                    {{ __('Password') }}
                  <span class="form-label-description">
                      @if (Route::has('password.request'))
                      <a href="{{ route('admin.password.request') }}">{{ __('I forgot password') }}</a>
                      @endif
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off" name="password" required autocomplete="current-password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
                </div>
              </div>
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember" />
                  <span class="form-check-label"> {{ __('Remember me') }}</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/admin/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/demo.min.js') }}" defer></script>
  </body>
</html>
