@extends('layouts.app')

@section('content')



    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
            <div class="row mx-0 bg-black-op">
                <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                    <div class="p-30 invisible" data-toggle="appear">
                        <p class="font-size-h3 font-w600 text-white">
                            Get Inspired and Create.
                        </p>
                        <p class="font-italic text-white-op">
                            Copyright &copy; <span class="js-year-copy"></span>
                        </p>
                    </div>
                </div>
                <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                    <div class="content content-full">
                        <!-- Header -->
                        <div class="px-30 py-10" style="text-align: right">
                            <a class="link-effect font-w700" href="index.html">
                                <i class="si si-fire"></i>
                                <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                            </a>
                            <h1 class="h3 font-w700 mt-30 mb-10">به دشبورد وب یونتی خوش امدید</h1>
                            <h2 class="h5 font-w400 text-muted mb-0">لطفا وارد شوید </h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                        <form method="POST" action="{{ route('login') }}" class="js-validation-signin px-30"style="text-align: right;">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12" >
                                    <div class="form-material floating" style="direction: rtl!important;">


                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="login-username" style="direction: rtl!important;">Username</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">



                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                        <label class="custom-control-label" for="login-remember-me">  {{ __('Remember Me') }}</label>

                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">


                                        <label class="form-check-label" for="remember">

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                        <i class="si si-login mr-10"></i> Sign In
                                    </button>
                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup2.html">
                                            <i class="fa fa-plus mr-5"></i> Create Account
                                        </a>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>




                            </div>
                        </form>
                        <!-- END Sign In Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <script src="assets/js/codebase.core.min.js"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signin.min.js"></script>
    <!-- END Main Container -->

@endsection
