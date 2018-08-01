@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="login_page" style="margin-top: 45px; margin-bottom: 15px;">
                <form class="form-horizontal offset-md-2" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong class="help-block">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="has-danger form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 0px;">
                        <label for="password" class="col-md-12 control-label">Password</label>

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control {{-- is-invalid --}}" name="password" required>
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 10px;   position: relative; float: right; padding-right: 0px;">
                                Forgot Your Password?
                            </a>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong class="help-block">{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-10" style="display: flex;">
                        <button type="submit" class="btn btn-primary col-md-12" style="margin-top: 15px; margin-bottom: 15px;">
                            Login
                        </button>
                    </div>
                    <a class="btn btn-link" href="{{ route('auth.activate.resend') }}">
                        Resend Activation Email
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="login_page" style="text-align: center; margin-top: 15px; margin-bottom: 45px;">
                <h4 style="text-align: center;">Don't have an account?</h4>
                <a href="/register" class="btn btn-primary" role="button" aria-pressed="true">
                    Sign up
                </a>
            </div>
        </div>
    </div>
</div>

@endsection