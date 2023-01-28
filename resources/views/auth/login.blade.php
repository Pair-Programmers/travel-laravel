@extends('layouts.master')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Login In</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Login In</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="login-form">
                    <h5>Login In</h5>
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Password <i>*</i></div>
                                <div class="field-inner">
                                    <input type="password" name="password" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner clearfix">
                                    <div class="remember">
                                        <div class="check-block">
                                            <input type="checkbox" name="remember" id="check-1">
                                            <label for="check-1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="forgot-pass">
                                        <a href="{{route('password.request')}}">Forgot your password? </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Login In<i
                                            class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Don't have a account? <a href="{{route('register')}}">Sign Up</a> Now</div>
            </div>
        </div>
    </section>
@endsection
