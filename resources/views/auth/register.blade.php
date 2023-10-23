@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

@section('content')

<div class="container " style="margin-top:70px;">
    <div class="row justify-content-center">
        <div class="form">
            <div class="d-grid justify-content-center">
                    <h3 class="mt-2">Register An Account</h3>
                <span class="mt-2" style="border-bottom: 1px solid rgb(219, 219, 219);  "></span>
                <br>
                <div class="ms-2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="">{{ __('Name') }} <span style="color: gold">*</span></label>

                            <div class="">
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" id="name" size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="email" class="">{{ __('Email Address') }} <span style="color: gold">*</span></label>

                            <div class="">
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password" class="">{{ __('Password') }}<span style="color: gold">*</span></label>

                            <div class="">
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}<span style="color: gold">*</span></label>

                            <div class="">
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <p style="font-size: 13px" class="ps-2">Your personal data will be used to support <br>
                            your experience throughout this website,  to manage <br>
                             access to your account, and for other purposes described in our privacy policy.</p>
                             <div class="mb-3">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label style="font-size: 13px" class="form-check-label " for="remember">
                                            {{ __('I agree to terms & Policy.') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <div class="">
                            <div class="">
                                <button type="submit" class="">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-4" style="text-align:center">Already have an account? <a href="{{ route('login') }}" style="color: #ffc107">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
