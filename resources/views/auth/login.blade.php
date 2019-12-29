@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">

            <form class="md-float-material form-material" method="post" action="{{ route('login') }}">
                @csrf
                <div class="text-center">
                    <img src="{{asset('public/admin/assets/images/logo.png')}}" alt="logo.png">
                </div>
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Sign In</h3>
                            </div>
                        </div>

                        <p class="text-muted text-center p-b-5">Sign in with your regular account</p>

                        <div class="form-group form-primary">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="mail_id" value="{{ old('mail_id') }}" required autocomplete="mail_id" autofocus>
                            <span class="form-bar"></span>
                            <label class="float-label">Username</label>
                            @error('mail_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group form-primary">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="form-bar"></span>
                            <label class="float-label">Password</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">{{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <div class="forgot-phone text-right float-right">

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-right f-w-600"> {{ __('Forgot Your Password?') }}</a>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Login') }}</button>
                            </div>
                        </div>

                        <p class="text-inverse text-left">Don't have an account?<a href="#"> <b>Register here </b></a>...!</p>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
