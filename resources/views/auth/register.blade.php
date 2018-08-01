@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="register_page" style="margin-top: 45px; margin-bottom: 15px;">
                <form class="form-horizontal offset-md-2" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-12 control-label">Name</label>

                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-12 control-label">Password</label>

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                        <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="col-md-10" style="display: flex;">
                        <button type="submit" class="btn btn-primary col-md-12" style="margin-top: 15px;">
                            Register
                        </button>
                    </div>
                    <div class="form-group col-md-10" style="text-align: justify;">
                        <p style="font-size: 10px; margin-top: 15px;">By clicking "Sign up", you acknowledge that you have read our updated terms of service, privacy policy and cookie policy, and that your continued use of the website is subject to these policies.</p>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="register_page" style="text-align: center; margin-top: 15px; margin-bottom: 45px;">
                <h4 style="text-align: center;">Already have an account?</h4>
                <a href="/login" class="btn btn-primary" role="button" aria-pressed="true">
                    Login
                </a>
            </div>
        </div>
    </div>
</div>
@endsection