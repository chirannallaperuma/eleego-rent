<?php $page = 'register'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="login-wrapper">
        <div class="loginbox">
            <div class="login-auth">
                <div class="login-auth-wrap">
                    <div class="sign-group">
                        <a href="{{ url('/') }}" class="btn sign-up"><span><i class="fe feather-corner-down-left"
                                    aria-hidden="true"></i></span> Back To Home</a>
                    </div>
                    <h1>Sign Up</h1>
                    <p class="account-subtitle">We'll send a confirmation code to your email.</p>
                    <form action="{{ route('register.custom') }}" method="POST">
                        @csrf
                        <div class="input-block">
                            <label class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" name="name" id="name">
                            <div class="text-danger pt-2">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-block">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="" name="email" id="email">
                            <div class="text-danger pt-2">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="input-block">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="" name="password"
                                    id="password">
                                <span class="toggle-password fas fa-eye-slash"></span>
                            </div>
                            <div class="text-danger pt-2">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-outline-light w-100 btn-size mt-1">Sign Up</button>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">Or, Create an account with your email</span>
                        </div>
                        <!-- Social Login -->
                        <div class="social-login">
                            <a href=""
                                class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                        src="{{ URL::asset('/build/img/icons/google.svg') }}" class="img-fluid"
                                        alt="Google"></span>Login with Google</a>
                        </div>
                        <div class="social-login">
                            <a href=""
                                class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                        src="{{ URL::asset('/build/img/icons/facebook.svg') }}" class="img-fluid"
                                        alt="Facebook"></span>Login with Facebook</a>
                        </div>
                        <!-- /Social Login -->
                        <div class="text-center dont-have">Already have an Account? <a href="{{ url('login') }}">Sign
                                In</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
