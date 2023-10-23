@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

@section('content')
<div class="" >
<div class="container " style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="form">
            <div class="d-grid justify-content-center mt-5">
                <h3>Log In Your Account</h3>
                <div class="w-full flex text-center justify-center mx-2">
                    <a class="btn btn-dark " href="/auth/google/redirect">
                        <i class="fab fa-google"></i>{{ __('Continue with Google') }}
                    </a>
                </div>
                <div class="w-full flex text-center justify-center mx-2">
                    <a class="btn btn-dark " href="/auth/facebook/redirect">
                        <i class="fab fa-google"></i>{{ __('Continue with facebook') }}
                    </a>
                </div>
                <span class="mt-2" style="border-bottom: 1px solid rgb(219, 219, 219);  "></span>
                <br>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">

                            <div class="">

                                <input id="email" type="email" size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" placeholder="Your email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mt-3">
                            <div class="">
                                <input id="password" type="password" size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-0">
                            <div class="">
                                <button type="submit" class="" >
                                    {{ __('Login') }}
                                </button>

                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                            </div>


                        </div>


                        <p class="mt-4" style="text-align:center">Don't Have an Account? <a href="{{ route('register') }}" style="color: #ffc107">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
