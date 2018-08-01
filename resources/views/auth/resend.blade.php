@extends('layouts.app')
@section('title', 'Resend Verification Email')
@section('title', 'Resend Verification Email')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="reset_page" style="margin-top: 65px; margin-bottom: 65px;">
                <form class="form-horizontal offset-md-2" method="POST" action="{{ route('auth.activate.resend') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-10" style="display: flex;">
                        <button type="submit" class="btn btn-primary col-md-12">
                            Resend
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection