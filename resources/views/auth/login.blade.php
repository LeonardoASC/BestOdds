@extends('layouts.guest')

@section('content')
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center ">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('images/logobestodds.png') }}" class="img-fluid" alt="Logo">
                </div>
                <div class="col-md-9 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                        <div class="col-12">
                            <form method="POST" action="{{ route('login') }}" class="c text-start">
                                @csrf
                                <div class="mb-4">
                                    <p class="lead fw-normal mb-0">Sign in with</p>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-center my-4">
                                    <div style="flex-grow: 1; height: 1px; background-color: #CCC;"></div>
                                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                    <div style="flex-grow: 1; height: 1px; background-color: #CCC;"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 d-flex flex-row justify-content-between items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class=" mt-4 pt-2">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                                        <a href="{{ route('register') }}" class="link-danger">Register</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary w-100">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2024. All rights reserved.
            </div>
            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
