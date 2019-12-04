@extends('layouts.default')

@section('content')
<div class="flex">
    <div class="back_login flex justify_center align_center item_grow">
        <a href="{{ route('login') }}">
            <img class="back_button" src="{{ asset('images/back.svg') }}">
        </a> 
    </div>
    <div class="login_left left_signup flex justify_center align_center">
        <form class="login_form" method="POST" action="{{ route('register') }}">
            <div class="page_heading">
                Sign Up
            </div>
            @csrf
            <div class="">
                <input id="name" type="text" class="input_signup" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="">
                <input id="email" type="email" class="input_signup" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="">
                <input id="password" type="password" class="input_signup" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="">
                <input id="password-confirm" type="password" class="input_signup" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

            <div class="login_buttons flex justify_end">
                <button type="submit"  class="login_button">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>

    <div class="login_right right_signup flex justify_center align_center item_grow">
        <img class="logo_large" src="{{ asset('images/logowhite.svg') }}">
    </div>
</div>

@endsection
