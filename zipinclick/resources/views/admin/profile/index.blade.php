@extends('admin.layouts.master')


@section('content')
    <div class="page-wrapper">


        <div class="page-body">
            <div class="container-xl">
                <form action="{{ route('admin.profile.update') }}" method="POST" class="card" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h3 class="card-title">{{ __('Edit Profile') }}</h3>
                        <div class="row row-cards">
                            <div class="col-md-12">
                                <x-admin.image-preview src="{{ asset(auth('admin')->user()->avatar) }}"
                                    label="{{ __('Avatar') }}" />
                            </div>
                            <div class="col-md-12">
                                <x-admin.input-text type="file" name="avatar" label="{{ __('Avatar') }}"
                                    value="{{ auth('admin')->user()->name }}" />
                            </div>
                            <div class="col-md-6">
                                <x-admin.input-text name="name" label="{{ __('Name') }}"
                                    value="{{ auth('admin')->user()->name }}" />
                            </div>
                            <div class="col-md-6">
                                <x-admin.input-text name="email" label="{{ __('Email') }}"
                                    value="{{ auth('admin')->user()->email }}" />
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">{{ __('Update Password') }}</button>
                    </div>
                </form>
                <form action="{{ route('admin.password.update') }}" method="POST" class="card mt-4"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h3 class="card-title">{{ __('Edit Password') }}</h3>
                        <div class="row row-cards">
                            <div class="col-md-12">
                                <x-admin.input-text type='password' name="current_password"
                                    label="{{ __('Current Password') }}"
                                    placeholder="{{ __('Your Current Password') }}" />
                            </div>
                            <div class="col-md-6">
                                <x-admin.input-text type='password' name="password" label="{{ __('New Password') }}"
                                    placeholder="{{ __('New Password') }}" />
                            </div>
                            <div class="col-md-6">
                                <x-admin.input-text type='password' name="password_confirmation"
                                    label="{{ __('Confirm Password') }}"
                                    placeholder="{{ __('Password Confirmation') }}" />
                            </div>




                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">{{ __('Update Password') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
