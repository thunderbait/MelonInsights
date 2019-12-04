@extends('layouts.default')

@section('content')
    <div class="flex">
        <div class="login_left flex justify_center align_center">
            <div class="login_form">
                <div class="page_heading">
                    Log In
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="">
                        <input id="email" type="email" class="input_login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                    </div>

                    <div class="">
                        <input id="password" type="password" class="input_login" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="login_options">
                        <div class="flex justify_space">
                            <div class="">
                                <label class="checkbox" for="remember">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkbox_box"></span>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="forgot_link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            
                        </div>
                    </div>

                    <div class="login_buttons flex justify_space">
                        <div class="">
                            <a href="{{ route('register') }}" class="signup_button">
                                {{ __('Sign Up') }}
                            </a>
                        </div>
                        <div class="">
                            <button type="submit" class="login_button">
                                {{ __('Login') }}
                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>

        <div class="login_right flex justify_center align_center item_grow">
            <img class="logo_large" src="{{ asset('images/logolarge.svg') }}">
        </div>
    </div>
@endsection
