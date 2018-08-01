@extends('layouts.app')
@section('title', 'Reset Password Request')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="email_page"  style="margin-top: 15px; margin-bottom: 65px;">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal offset-md-2" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

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
                    <div class="col-md-5" style="display: flex;"">
                        <button type="submit" class="btn btn-primary col-md-12" style="margin-top: 15px; margin-bottom: 15px;">
                            Send Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
