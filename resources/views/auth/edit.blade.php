@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

@section('content')

<div class="container " style="margin-top:70px;">
    <div class="row justify-content-center">
        <div class="form">
            <div class="d-grid justify-content-center">
                    <h3 class="mt-2">Update your Account</h3>
                <span class="mt-2" style="border-bottom: 1px solid rgb(219, 219, 219);  "></span>
                <br>
                <div class="ms-2">
                    <form method="POST" action="{{ route('use.updates') }}">
                        @csrf
                            @method('put')

                            <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="mb-3">
                            <label for="name" class="">{{ __('Name') }} <span style="color: gold">*</span></label>

                            <div class="">
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" value="{{ $user->name }}" id="name" size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input size="40" style="padding: 10px; outline:none; border: 1px solid gainsboro" value="{{ $user->email }}" id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            {{-- <label for="password" class="">{{ __('Password') }} <span style="color: gold">*</span></label> --}}

                            <div class="">
                                <input size="40" type="hidden" style="padding: 10px; outline:none; border: 1px solid gainsboro" value="{{ $user->email }}" id="password" class=" @error('') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            {{-- <label for="role" class="">{{ __('role') }} <span style="color: gold">*</span></label> --}}

                            <div class="">
                                <input size="40"  style="padding: 10px; outline:none; border: 1px solid gainsboro" value="{{ $user->role }}" id="role" type="hidden" class=" @error('') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role">

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="mt-4" style="text-align:center">Already have an account? <a href="{{ route('login') }}" style="color: #ffc107">Log in</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
